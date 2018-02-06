<?php

$db = require_once '../inc/db.php';
require_once '../inc/helpers.php';

$back = $_REQUEST['back'] ?? $_SERVER['HTTP_REFERER'] ?? BASE_URL;
header('Location: ' . $back);

if (!isset($_REQUEST['id'])) {
    exit('Не задан id');
}
$id = (int) $_REQUEST['id'];
$sql = "SELECT * FROM products WHERE `id` = " . $id . " LIMIT 1";
$result = mysqli_query($db, $sql);
$product = $result ? $result->fetch_assoc() : false;
if (!$product) {
    exit('Товар не найден');
}

$result = deleteById($db, 'products', $id);

echo '<pre>';
if (!$result) {
    echo 'Ошибка:' . PHP_EOL;
    echo mysqli_error($db);
} else {
    deleteFile($product['img']);
    echo 'Успешно';
}
echo '</pre>';
