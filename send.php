<?php
session_start();

require 'vendor/autoload.php'; // Composer autoload

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
// ==================== DATABASE CONFIGURATION ====================
$host = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];     // ← Change this
$username = $_ENV['DB_USER'];     // ← Change this
$password = $_ENV['DB_PASS'];     // ← Change this

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("Database Connection Error: " . $e->getMessage());
    http_response_code(500);
    echo "Server configuration error.";
    exit;
}

function sendContactMessage($email, $subject, $description)
{
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['MAIL_USERNAME'];
        $mail->Password   = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = 'tls';
        $mail->Port       = $_ENV['MAIL_PORT'];

        $mail->setFrom($_ENV['MAIL_FROM'], $_ENV['MAIL_FROM_NAME']);
        $mail->addAddress($_ENV['MAIL_TO']);
        $mail->addReplyTo($email, $email);

        $mail->isHTML(false);
        $mail->Subject = $subject;

        $mail->Body    = "New Contact Form Submission\n\n";
        $mail->Body   .= "From: $email\n";
        $mail->Body   .= "Subject: $subject\n\n";
        $mail->Body   .= "Message:\n";
        $mail->Body   .= "$description\n";

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Mailer Error: " . $mail->ErrorInfo);
        return false;
    }
}
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email       = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL) : '';
    $subject     = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
    $description = isset($_POST['description']) ? htmlspecialchars(trim($_POST['description'])) : '';

    // Validation
    if (!$email || !$subject || !$description) {
        $_SESSION['contact_message'] = [
            'status' => 'error',
            'text'   => 'All fields are required.'
        ];
        header("Location: contact.php");
        exit;
    }

    if (strlen($subject) < 8 || strlen($description) < 8) {
        $_SESSION['contact_message'] = [
            'status' => 'error',
            'text'   => 'Subject and Description must be at least 8 characters.'
        ];
        header("Location: contact.php");
        exit;
    }

    // Save to Database
    try {
        $stmt = $pdo->prepare("INSERT INTO contacts (email, subject, message, created_at) 
                              VALUES (?, ?, ?, NOW())");
        $stmt->execute([$email, $subject, $description]);
    } catch (PDOException $e) {
        error_log("Database Insert Error: " . $e->getMessage());
        // Continue even if DB fails (email is more important)
    }

    // Send Email
    if (sendContactMessage($email, $subject, $description)) {
        $_SESSION['contact_message'] = [
            'status' => 'success',
            'text'   => 'Your message has been sent successfully. Thank you!'
        ];
    } else {
        $_SESSION['contact_message'] = [
            'status' => 'error',
            'text'   => 'Failed to send message. Please try again.'
        ];
    }
    header("Location: contact.php");
    exit;
} else {
    $_SESSION['contact_message'] = [
        'status' => 'error',
        'text'   => 'Invalid Request. Please try again.'
    ];
    header("Location: contact.php");
    exit;
}
