<?php
$db = require_once 'inc/db.php';
require_once 'inc/helpers.php';
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

    <?php require_once 'inc/header.php' ?>
    <?php require_once 'inc/slider.php' ?>

    <section class="product">
        <div class="container">
            <div class="row">
                <div class="product_wrap clearfix">
                    <h2>ПРОДУКЦИЯ И РОЗНИЧНЫЕ ЦЕНЫ</h2>

                <?php foreach ($products as $product) { ?>
                    <div class="col-md-3">
                        <div class="product_n">
                            <div class="product_naz"><?=$product['name']?></div>
                            <img class="img-responsive" src="<?=url('img/products/' . $product['img'])?>" alt="<?=$product['name']?>">
                            <div class="product_opis"><?=$product['description']?></div>
                            <div class="product_price">
                                <a class="button_price"> <?=$product['g_price']?> Р
                                    <span>+</span> <span>Расширенная гарантия</span>
                                </a>
                                <a id="zzz" href="javascript:void(null);">О гарантии</a>
                                <a class="button_price"><?=$product['price']?> Р</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                </div>
            </div>
        </div>
    </section>

    <?php require_once 'inc/footer.php' ?>

</body>
</html>
