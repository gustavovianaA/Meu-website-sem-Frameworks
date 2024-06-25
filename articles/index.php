<?php require_once('../config.php');

if (isset($_GET['art'])) {

    $article = filter_var($_GET['art'], FILTER_UNSAFE_RAW);

    if ($language === 'pt-br') {

        switch ($article) {
            case 'matematica':
                $article = "{$language}/matematica.php";
                break;

            default:
                header("Location: ../not-found.php?lang={$language}");
                exit();
        }
    } elseif ($language === 'eng') {

        switch ($article) {
            case 'mathematics':
                $article = "{$language}/mathematics.php";
                break;

            default:
                header("Location: ../not-found.php?lang={$language}");
                exit();
        }
    }
} else {

    header("Location: ../not-found.php?lang={$language}");
    exit();
}

require_once('../includes/header.php');
?>

<div id='main-content'>
    <?php require_once($article); ?>
</div>