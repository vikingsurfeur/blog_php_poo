<h1>Homepage</h1>

<a style="display: block;" href="../public/index.php?p=portfolio">Portfolio</a>
<a style="display: block;" href="../public/index.php?p=blog">Blog</a>

<?php

use App\Database;

$db     = new Database('blog_php_poo');
$datas  = $db->query('SELECT * FROM article');
var_dump($datas[0]->titre);

// Create some articles with this

//$count = $pdo->exec('INSERT INTO article SET titre="Premier Article", date="'.date('Y-m-d H:i:s').'"');
//var_dump($count);