<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GVA</title>
    <link rel='stylesheet' type='text/css' href='style/style.css'>
</head>

<body style='margin:0;padding:0'>
    <header>
        <nav>
            
        <?php if($language === 'pt-br'): ?> 
            <ul>
                <li><a href='/gustavovianaalencar/index.php'>Home</a></li>
                <li>Artigos</li>
                <li>Sobre</li>
            </ul>
        <?php elseif($language === 'eng'): ?>
            <ul>
                <li><a href='/gustavovianaalencar/index.php'>Home</a></li>
                <li>Articles</li>
                <li>About</li>
            </ul>
        <?php endif;?>        
       
            <ul>
                <li><a href='/gustavovianaalencar/index.php?lang=pt-br'>PT-BR</a></li>
                <li><a href='/gustavovianaalencar/index.php?lang=eng'>ENG</a></li>
            </ul>
        </nav>
    </header>