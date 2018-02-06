<?php
$db = require_once '../inc/db.php';
require_once '../inc/helpers.php';
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
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>Редактировать</title>
    <meta name="description" content="Умные часы" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="<?=url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=url('css/main.css')?>" />
    <link rel="stylesheet" href="<?=url('css/media.css')?>" />
</head>
<body>
    <div id="app">

        <?php require_once 'inc/navbar.php'; ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default table-responsive">
                        <div class="panel-heading">Редактировать товар #<?=$product['id']?></div>

<form class="form-horizontal"
    method="POST"
    action="<?=url('admin/update.php')?>"
    enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$product['id']?>">
    <div class="panel-body">
        <div class="form-group">
            <label for="name" class="col-md-3 control-label">Название</label>
            <div class="col-md-9">
                <input id="name" type="text" class="form-control" name="name" value="<?=$product['name']?>">
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="col-md-3 control-label">Цена</label>
            <div class="col-md-9">
                <input id="price" type="text" class="form-control" name="price" value="<?=$product['price']?>">
            </div>
        </div>
        <div class="form-group">
            <label for="g_price" class="col-md-3 control-label">Цена с гарантией</label>
            <div class="col-md-9">
                <input id="g_price" type="text" class="form-control" name="g_price" value="<?=$product['g_price']?>">
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-md-3 control-label">Описание</label>
            <div class="col-md-9">
                <textarea id="description" name="description" class="form-control" rows="6"><?=$product['description']?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="img" class="col-md-3 control-label">Картинка (если не выбрать, останется старая)</label>
            <div class="col-md-3">
                <input id="img" type="file" name="img">
            </div>

            <label class="col-md-3 control-label">Текущая картинка</label>
            <div class="col-md-3">
                <img class="img-responsive" src="<?=url('img/' . $product['img'])?>" alt="<?=$product['name']?>">
            </div>
        </div>
        <div class="btn-group" role="group" aria-label="...">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
