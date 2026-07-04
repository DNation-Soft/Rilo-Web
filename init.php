<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('BASE_URL', $_ENV['APP_BASE_URL'] ?? 'http://localhost');

function isActive($page)
{
    $current = basename($_SERVER['PHP_SELF']); // current file name
    return $current === $page ? 'active' : '';
}
