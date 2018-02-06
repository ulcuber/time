<?php

define('BASE_URL', 'http://localhost/sites/college/time/');
define('UPLOADDIR', DIRECTORY_SEPARATOR . get_absolute_path(__DIR__ . '/../img/products/') . DIRECTORY_SEPARATOR);

function get_absolute_path($path)
{
    $path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path);
    $parts = array_filter(explode(DIRECTORY_SEPARATOR, $path), 'strlen');
    $absolutes = array();
    foreach ($parts as $part) {
        if ('.' == $part) {
            continue;
        }
        if ('..' == $part) {
            array_pop($absolutes);
        } else {
            $absolutes[] = $part;
        }
    }
    return implode(DIRECTORY_SEPARATOR, $absolutes);
}

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

function saveFile(string $inputName)
{
    if (!isset($_FILES[$inputName])) {
        return;
    }

    $filename = $_FILES[$inputName]['tmp_name'];

    $maxImageSize = 1024 * 1024;
    if (filesize($filename) > $maxImageSize) {
        exit('Ошибка: Размер файла > 1 МБ.');
    }

    $name = $_FILES[$inputName]['name'];
    $ext = substr($name, 1 + strrpos($name, "."));
    $validTypes = ['gif', 'jpg', 'png', 'jpeg'];
    if (!in_array($ext, $validTypes)) {
        exit('Ошибка: Недопустимый тип файла.');
    }

    $name = md5(basename($name)) . '.' . $ext;
    $uploadfile = UPLOADDIR . $name;
    if (move_uploaded_file($filename, $uploadfile)) {
        echo "Файл корректен и был успешно загружен." . PHP_EOL;
    } else {
        exit('Возможная атака с помощью файловой загрузки!');
    }
    return $name;
}

function deleteFile($name)
{
    $uploadfile = UPLOADDIR . $name;
    if (is_file($uploadfile)) {
        unlink($uploadfile);
    }
}
