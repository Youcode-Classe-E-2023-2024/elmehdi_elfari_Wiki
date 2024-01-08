<?php

/**
 * Dump and die.
 *
 * @param $var
 * @return void
 */
function dd($var) {
    echo '<pre>';
    echo '<code>';
    var_dump($var);
    echo '</code>';
    echo '</pre>';
    die();
}

function str_secure($str) {
    return trim(htmlspecialchars($str));
}

$db = mysqli_connect('localhost', 'root', '', 'simple_mvc_db');
