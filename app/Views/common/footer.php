<?php

use App\Helpers\LocalizationHelper;
use App\Helpers\UserContext;
use App\Helpers\ViewHelper;


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Initialize session and current user
UserContext ::init();
$currentUser = UserContext ::getCurrentUser();
$currentLang = $_SESSION['lang'] ?? 'en';

// Set language
LocalizationHelper ::setLanguage($currentLang);
?>

<footer id="footer-bar">

<!-- Footer content before scripts -->
<?= ViewHelper::loadJsScripts();?>
</footer>
    
</body>
</html>

