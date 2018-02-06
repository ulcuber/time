<?php

$db = require_once '../inc/db.php';
require_once '../inc/helpers.php';

$back = $_REQUEST['back'] ?? $_SERVER['HTTP_REFERER'] ?? BASE_URL;
header('Location: ' . $back);

$filename = saveFile('img');
if ($filename) {
    $product['img'] = $filename;
}
$product['name'] = $_REQUEST['name'];
$product['price'] = (int) $_REQUEST['price'];
$product['g_price'] = (int) $_REQUEST['g_price'];
$product['description'] = $_REQUEST['description'];

$result = insert($db, 'products', $product);

if (!$result) {
    echo '<pre>';
    echo 'Ошибка:' . PHP_EOL;
    echo mysqli_error($db);
    echo '</pre>';
} else {
    echo 'Успешно';
}
