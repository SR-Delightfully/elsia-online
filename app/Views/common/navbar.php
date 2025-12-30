<?php
use App\Helpers\LocalizationHelper;
use App\Helpers\UserContext;

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

UserContext::init();
$currentUser = UserContext::getCurrentUser();
$currentLang = $_SESSION['lang'] ?? 'en';
LocalizationHelper::setLanguage($currentLang);

$tabs = [
    'collections' => ['key' => 'collections'],
    'categories'  => ['key' => 'categories'],
    'products'    => ['key' => 'products'],
];

if (UserContext::isLoggedIn() && UserContext::isAdmin()) {
    $tabs = ['admin' => ['key' => 'admin']] + $tabs;
}
?>

<header id="nav-bar-container">
    <div id="nav-bar-wrapper">
        <nav id="nav-bar">
        </nav>
    </div>
</header>
