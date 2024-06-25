<?php
require_once('config.php');
require_once('includes/header.php')
?>

<div id='main-holder' style='width:90%;display: flex;margin: 0 auto;'>
    <aside style='width:20%; margin: 0;background-color: #000; color: #fff'>
        <?php if ($language === 'pt-br') : ?>
            <ul>
                <li><a href='articles/index.php?art=matematica&lang=pt-br'>Matemática</a></li>
            </ul>
        <?php elseif ($language === 'eng') : ?>
            <ul>
                <li><a href='articles/index.php?art=mathematics&lang=eng'>Mathematics</a></li>
            </ul>
        <?php endif; ?>
    </aside>
    <div id='main-content'>
        
        <h1>Gustavo Viana de Alencar</h1>
        
        <?php if ($language === 'pt-br') : ?>
            <h3>Seja bem vindo à minha página web!</h3>
            <p>Sou desenvolvedor web e estudante de matemática.</p>
        <?php elseif ($language === 'eng') : ?>
            <h3>Welcome to my web page!</h3>
            <p>I'm a web developer and mathematics student.</p>
        <?php endif ?>

    </div>
</div>

<footer>
</footer>

</body>

</html>