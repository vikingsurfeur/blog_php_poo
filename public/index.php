<?php

use App\Autoloader;
require_once '../app/Autoloader.php';
Autoloader::register();

if (isset($_GET['page']) &&
    $_GET['page'] === 'portfolio' ||
    $_GET['page'] === 'blog') {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

ob_start();
if ($page === 'home') {
    require_once '../pages/home.php';
} elseif ($page === 'portfolio') {
    require_once '../pages/portfolio.php';
} else {
    require_once '../pages/blog.php';
}
$content = ob_get_clean();
require_once '../pages/templates/default.php';

