<h1>Homepage</h1>

<a style="display: block;" href="../public/index.php?page=portfolio">Portfolio</a>
<a style="display: block;" href="../public/index.php?page=blog">Blog</a>

<?php

$pdo = new PDO('mysql:dbname=blog_php_poo;host=localhost', 'root', 'root');
$pdo->exec('INSERT TO article SET titre="Premier Article", date="'.date('Y-m-d H:i:s').'"');

?>