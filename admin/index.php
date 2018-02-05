<?php
$db = require_once '../inc/db.php';
require_once '../inc/helpers.php';
$sql = "SELECT * FROM products";
// $products = $db->query($sql) ?: [];
$products = mysqli_query($db, $sql) ?: [];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>Умные часы премиального качества.</title>
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
                        <div class="panel-heading">Товары</div>
    <table class="table table-condensed table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Название</th>
                <th>Цена</th>
                <th class="text-right">Действия</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr class="{{ $status->getClass($question->status) }}">
                    <td><?=$product['id']?></td>
                    <td><?=$product['name']?></td>
                    <td><?=$product['price']?></td>
                    <td class="text-right">
                        <a target="_blank" class="btn btn-xs btn-info" href="<?=url()?>">
                            1
                        </a>
                        <a target="_blank" class="btn btn-xs btn-info" href="<?=url()?>">
                            2
                        </a>
                        <form action="<?=url()?>" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) {return true;} else {return false;};">
                            <button type="submit" class="btn btn-xs btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
