 <div class="container">
            <!-- Example Code Start-->
            <nav class="navbar navbar-dark navbar-expand-lg p-0">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?= BASE_URL; ?>">
                        <img src="assets/image/logo-white.webp" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                      <ul class="navbar-nav nav-item-text">
    <li class="nav-item">
        <a class="nav-link <?= isActive('index.php'); ?>" href="<?= BASE_URL; ?>index.php">Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?= isActive('services.php'); ?>" href="#" id="servicesDropdown" role="button"
           data-bs-toggle="dropdown" aria-expanded="false">
           Services
        </a>
        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
            <li><a class="dropdown-item <?= isActive('web-development.php'); ?>" href="<?= BASE_URL; ?>web-development.php">Web Development</a></li>
            <li><a class="dropdown-item <?= isActive('graphics-design.php'); ?>" href="<?= BASE_URL; ?>graphics-design.php">Graphic Design</a></li>
            <li><a class="dropdown-item <?= isActive('ui-ux-design.php'); ?>" href="<?= BASE_URL; ?>ui-ux-design.php">UI/UX Design</a></li>
            <li><a class="dropdown-item <?= isActive('digital-marketing.php'); ?>" href="<?= BASE_URL; ?>digital-marketing.php">Digital Marketing</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= isActive('our-team.php'); ?>" href="<?= BASE_URL; ?>our-team.php">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= isActive('portfolio.php'); ?>" href="<?= BASE_URL; ?>portfolio.php">Work</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= isActive('contact.php'); ?>" href="<?= BASE_URL; ?>contact.php">Contact</a>
    </li>
</ul>

                    </div>
                </div>
            </nav>
            <!-- Example Code End -->
        </div>