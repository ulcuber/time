<?php

define('BASE_URL', 'http://localhost/sites/college/time/');
define('UPLOADDIR', realpath(__DIR__ . '../img/products/'));

function url(string $url = '', array $params = [])
{
    return BASE_URL . $url . (!empty($params) ? '?' . http_build_query($params) : '');
}

function update(mysqli $db, string $table, array $item)
{
    $pairs = [];
    foreach ($item as $key => $value) {
        if ($key != 'id') {
            $pairs[] = wrapColumn($db, $key) . ' = ' . wrapValue($db, $value);
        }
    }
    $table = wrapColumn($db, $table);

    $sql = "UPDATE " . $table . " SET " . implode(", ", $pairs) .
        " WHERE `id` = " . (int) $item['id'];

    return mysqli_query($db, $sql);
}

function wrapColumn(mysqli $db, string $column)
{
    return '`' . mysqli_real_escape_string($db, $column) . '`';
}

function wrapValue(mysqli $db, $value)
{
    if (is_int($value)) {
        return $value;
    }
    return "'" . mysqli_real_escape_string($db, $value) . "'";
}

function saveFile(string $filename)
{
    if (!isset($_FILES[$filename])) {
        return;
    }
    $uploadfile = UPLOADDIR . basename($_FILES[$filename]['tmp_name']);
    var_dump($uploadfile);
    if (move_uploaded_file($_FILES[$filename]['tmp_name'], $uploadfile)) {
        echo "Файл корректен и был успешно загружен." . PHP_EOL;
    } else {
        echo "Возможная атака с помощью файловой загрузки!" . PHP_EOL;
    }
    return $_FILES[$filename]['tmp_name'];
}
