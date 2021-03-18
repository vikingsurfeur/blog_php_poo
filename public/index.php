<?php

//use App\Autoloader;
use App\Database;
require_once '../app/Database.php';
//require_once '../app/Autoloader.php';
//App\Autoloader::register();

if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

// Initialize my objects

$db = new Database('blog_php_poo');

// Return my Template with content

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

