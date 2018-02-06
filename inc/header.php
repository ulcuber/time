<?php
require_once 'inc/helpers.php';
?>
<header class="top_header">
    <div class="header_topline">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="header_topline_logo">
                        <a href="<?=url()?>"><img src="<?=url('img/logo.jpg')?>" alt="logo">  </a>
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
                        <li><a href="<?=url('products.php')?>">Розничные цены</a></li>
                        <li><a href="<?=url('about.php')?>">О нас</a></li>
                        <li><a href="<?=url('photo.php')?>">Фото</a></li>
                        <li><a href="<?=url('garant.php')?>">Расширенная гарантия</a></li>
                        <li><a href="<?=url('contact.php')?>">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</header>
<section class="order">
    <div class="baner_1" id="jq2">
        <img src="<?=url('img/kw88_rus.jpg')?>" alt="banner">
    </div>
</section>
