<?php
$db = require_once 'inc/db.php';
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
    <link rel="stylesheet" href="bootstrap/bootstrap-grid-3.3.1.min.css" />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/media.css" />


</head>
<body>
    <header class="top_header">
        <div class="header_topline">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="header_topline_logo">
                            <a href="index.html"><img src="img/logo.jpg" alt="Умные часы">  </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="header_topline_left">
                            <h1>Time - ЕСЛИ НУЖНО КАЧЕСТВО</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <nav class="maian_mnu clearfix">
                        <ul>
                            <li><a href="tovar.html">Розничные цены</a></li>
                            <li><a href="onas.html">О нас</a></li>
                            <li><a href="foto.html">Фото</a></li>
                            <li><a href="garant.html">Расширенная гарантия</a></li>
                            <li><a href="kontakt.html">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </header>
   <section class="order">
    <div class="baner_1" id="jq2">
                <img src="img/kw88_rus.jpg" alt="Умные часы">
            </div>

        </section>
            <section class="product">
                <div class="container">
                    <div class="row">
                        <div class="product_wrap clearfix">
                            <h2>ПРОДУКЦИЯ И РОЗНИЧНЫЕ ЦЕНЫ</h2>

                        <?php foreach ($products as $product) { ?>
                            <div class="col-md-3">
                                <div class="product_n">
                                    <div class="product_naz"><?=$product['name']?></div>
                                    <img src="img/<?=$product['img']?>" alt="Умные часы">
                                    <div class="product_opis"><?=$product['description']?></div>
                                    <div class="product_price">
                                        <a class="button_price"> <?=$product['g_price']?> Р
                                            <span>+</span> <span>Расширенная гарантия</span>
                                        </a>
                                        <a id="zzz" href="#ggg">О гарантии</a>
                                        <a class="button_price"><?=$product['price']?> Р</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        </div>
                    </div>
                </div>
            </section>

            <footer>
                <div class="container">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <nav class="maian_mnu2 clearfix">
                                <ul>
                            <li class="active"><a href="index.html">Главная</a></li>
                            <li><a href="tovar.html">Розничные цены</a></li>
                            <li><a href="onas.html">О нас</a></li>
                            <li><a href="foto.html">Фото</a></li>
                            <li><a href="garant.html">Расширенная гарантия</a></li>
                            <li><a href="kontakt.html">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </footer>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
