<?php 
require_once('config.php');
require_once('includes/header.php') 
?>

<div id='main-holder' style='width:90%;display: flex;margin: 0 auto;'>
    <aside style='width:20%; margin: 0;background-color: #000; color: #fff'>
        <?php if ($language === 'pt-br') { ?>
            <ul>
                <li><a href='articles/index.php?art=matematica&lang=pt-br'>Matemática</a></li>
            </ul>
        <?php } else if ($language === 'eng') { ?>
            <ul>
                <li><a href='articles/index.php?art=mathematics&lang=eng'>Mathematics</a></li>
            </ul>
        <?php } ?>
    </aside>
    <div id='main-content'>
        <h1>
            <?php
            if ($language === 'pt-br') {
                echo '404 Página não encontrada!';
            } else if ($language === 'eng') {
                echo '404 Page not found!';
            }
            ?>

        </h1>        
    </div>
</div>

<footer>
</footer>

</body>
</html>