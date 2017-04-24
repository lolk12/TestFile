<?php
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <title>Document</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <section id="menu-0">
        <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
            <div class="container">
                <div class="mbr-table">
                    <div class="mbr-table-cell">

                        <div class="navbar-brand">
                            <a href="<?= Url::toRoute('') ?>" class="navbar-logo"><img src="<?= Url::toRoute('assets/images/022-170x128.jpg') ?>"></a>
                            <a class="navbar-caption" href="<?= Url::toRoute('') ?>">Metal Trade</a>
                        </div>

                    </div>
                    <div class="mbr-table-cell">

                        <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                            <div class="hamburger-icon"></div>
                        </button>

                        <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="<?= Url::toRoute('') ?>">Главная</a></li><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="<?= Url::toRoute('') ?>" aria-expanded="false">О Платформе</a><div class="dropdown-menu"><a class="dropdown-item" href="<?= Url::toRoute('') ?>">Продавцам</a><a class="dropdown-item" href="<?= Url::toRoute('') ?>">Покупателям</a><a class="dropdown-item" href="<?= Url::toRoute('') ?>">Регистрация в Системе<br></a><a class="dropdown-item" href="<?= Url::toRoute('') ?>">Правила работы</a></div></li><li class="nav-item dropdown open"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="<?= Url::toRoute('') ?>" aria-expanded="true">О Нас</a><div class="dropdown-menu"><a class="dropdown-item" href="<?= Url::toRoute('') ?>">Контакты</a></div></li><li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline" href="<?= Url::toRoute('') ?>">Войти</a></li></ul>
                        <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                            <div class="close-icon"></div>
                        </button>

                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section class="engine">
        <a rel="external" href="<?= Url::toRoute('') ?>">>Главная</a>
    </section>
    <section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" id="header1-4" style="background-image: url(assets/images/jumbotron.jpg);">
        <?= $content ?>
    </section>
    <style type="text/css">
        body{

        }
        #header1-4{
            background-image: url("<?= Url::toRoute('assets/images/jumbotron.jpg') ?>")!important;

        }
    </style>

    <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">

        <div class="container">
            <p class="text-xs-center">Copyright (c) 2017 Metal Trade.</p>
        </div>
    </footer>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>