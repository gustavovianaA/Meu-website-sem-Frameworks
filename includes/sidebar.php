<aside style='width:20%; margin: 0;background-color: #000; color: #fff'>

    <?php if ($language === 'pt-br') : ?>
        <h3 style='line-height: 2em'>Artigos Selecionados</h3>
        <ul>
            <li><a href='<?= BASE_URL ?>articles/index.php?art=matematica&lang=pt-br'>Matemática</a></li>
            <li><a href='<?= BASE_URL ?>articles/index.php?art=revisaophp&lang=pt-br'>Revisão PHP</a></li>
        </ul>
    <?php elseif ($language === 'eng') : ?>
        <h3 style='line-height: 2em'>Selected Articles</h3>
        <ul>
            <li><a href='<?= BASE_URL ?>articles/index.php?art=mathematics&lang=eng'>Mathematics</a></li>
        </ul>
    <?php endif; ?>

</aside>