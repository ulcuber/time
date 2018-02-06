<?php
require_once 'inc/helpers.php';
?>
<footer>
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <nav class="maian_mnu2 clearfix">
                    <ul>
                <li class="active"><a href="<?=url()?>">Главная</a></li>
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
</footer>

<script src="<?=url('js/jquery.min.js')?>"></script>
<script src="<?=url('js/bootstrap.min.js')?>"></script>
