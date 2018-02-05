<?php

// DEBUG
ini_set('error_reporting', E_ALL | E_NOTICE | E_STRICT | E_DEPRECATED);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('html_errors', 1);
ini_set('docref_root', 'http://php.net/manual/ru/');
ini_set('docref_ext', '.php');

$db = new mysqli(
    'localhost',
    'root',
    'secret',
    'time'
);

if (mysqli_connect_error()) {
    exit('Ошибка подключения (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

if (!mysqli_set_charset($db, "utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($db));
    exit();
}

return $db;
