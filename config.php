<?php

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
