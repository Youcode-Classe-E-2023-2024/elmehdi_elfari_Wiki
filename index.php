<?php

include_once 'init.php';
include '_config/config.php';

spl_autoload_register(function ($class) {
    include_once 'classes/' . $class . '.php';
});

if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

$all_pages = scandir('controllers');

if (in_array($page . '_controller.php', $all_pages)) {
    include_once 'models/' . $page . '_model.php';
    include_once 'controllers/' . $page . '_controller.php';
    include_once 'views/_layout.php';
} else {
    echo '<h1>404</h1>';
}
