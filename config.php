<?php
$time_start = microtime(true);

define ('ENV' , 'development');
define ('BASEDIR' , 'gustavovianaalencar');
define ('DB_HOST' , 'localhost');
define ('DB_NAME' , 'gva_wnf');
define ('DB_USER' , 'root');
define ('DB_PASSWORD' , '');

if(ENV === 'development' ){
      
    if(strpos($_SERVER['PHP_SELF'] , BASEDIR) === false){
        echo 'You must set the correct base directory';
        die();
    }
    
    define('BASE_URL' , '/' . BASEDIR . '/');
}else{
    //code that fits production
}

if (isset($_GET['lang'])) {
    if ($_GET['lang'] === 'pt-br') {
        $language = 'pt-br';
    } else if ($_GET['lang'] === 'eng') {
        $language = 'eng';
    } else {
        $language = 'pt-br';
    }
} else {
    $language = 'pt-br';
}


