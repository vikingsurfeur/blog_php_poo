<h1>Homepage</h1>

<a style="display: block;" href="../public/index.php?p=portfolio">Portfolio</a>
<a style="display: block;" href="../public/index.php?p=blog">Blog</a>

<ul>
    <?php foreach ($db->query('SELECT * FROM article') as $post): ?>
        <a href="../public/index.php?p=post&id=<?= $post->id; ?>"><li><?= $post->titre; ?></li></a>
    <?php endforeach; ?>
</ul>

<?php
// Create some articles with this

//$count = $pdo->exec('INSERT INTO article SET titre="Premier Article", date="'.date('Y-m-d H:i:s').'"');
//var_dump($count);