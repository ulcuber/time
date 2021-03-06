<?php
require_once 'inc/helpers.php';
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

    <section class="main_content_2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="ggg">
                        <h2>Контакты</h2>
                        <li>Город Ульяновск, Ульяновский проспект 14, ТЦ Лидер</li>
                    </div>
                </div>
                <div class="col-md-6">
                    <a class="dg-widget-link" href="http://2gis.ru/ulyanovsk/firm/7741090140528062/center/48.58216,54.374511/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Ульяновска</a><div class="dg-widget-link"><a href="http://2gis.ru/ulyanovsk/center/48.58216,54.374511/zoom/16/routeTab/rsType/bus/to/48.58216,54.374511╎Лидер, торговый центр?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Лидер, торговый центр</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":"100%","height":600,"borderColor":"#a3a3a3","pos":{"lat":54.374511,"lon":48.58216,"zoom":16},"opt":{"city":"ulyanovsk"},"org":[{"id":"7741090140528062"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                </div>
            </div>
        </div>
    </section>

    <?php require_once 'inc/footer.php' ?>

</body>
</html>
