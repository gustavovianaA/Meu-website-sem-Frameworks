<?php 

require_once('../config.php');
require_once('../classes/Database.php');
require_once('../classes/Article.php');

$article = new Article();

if (isset($_GET['art'])) {

    $title = filter_var($_GET['art'], FILTER_UNSAFE_RAW);

    $article->find($title,$language);

    if($article->exists === false){
        header("Location: ../not-found.php?lang={$language}");
        exit();
    }
    

} else {
    header("Location: ../not-found.php?lang={$language}");
    exit();
}

require_once('../includes/header.php');
?>

<div id='main-content'>
    <?php require_once($article->filepath); ?>
</div>



