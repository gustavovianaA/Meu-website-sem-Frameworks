<?php

require_once('config.php');
require_once('classes/Database.php');
require_once('classes/Article.php');

$article = new Article();

require_once('includes/header.php');

$articlesList = $article->all();
?>

<div id='main-holder'>

    <?php require_once('includes/sidebar.php') ?>

    <div id='main-content'>
        <pre>
        <?php var_dump($articlesList) ?>
        </pre>
    </div>

</div>

<?php require_once('includes/footer.php'); ?>