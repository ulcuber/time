<?php

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
