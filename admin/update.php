<?php

$db = require_once '../inc/db.php';
require_once '../inc/helpers.php';

$back = $_REQUEST['back'] ?? $_SERVER['HTTP_REFERER'] ?? BASE_URL;
// header('Location: ' . $back);

if (!isset($_REQUEST['id'])) {
    exit('Не задан id');
}

$product = [];
$filename = saveFile('img');
if ($filename) {
    $product['img'] = $filename;
}
$product['id'] = $_REQUEST['id'];
$product['name'] = $_REQUEST['name'];
$product['price'] = (int) $_REQUEST['price'];
$product['g_price'] = (int) $_REQUEST['g_price'];
$product['description'] = $_REQUEST['description'];

$result = update($db, 'products', $product);

if (!$result) {
    echo '<pre>';
    echo 'Ошибка:' . PHP_EOL;
    echo mysqli_error($db);
    echo '</pre>';
} else {
    echo 'Успешно';
}
