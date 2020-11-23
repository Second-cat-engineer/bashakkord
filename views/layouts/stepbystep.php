<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\widgets\MenuWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php $this->registerCsrfMetaTags() ?>
    <title>StepByStep</title>
    <meta name = "description" content = "Шаг за шагом, Step by step">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <h1>Hello, Step By Step</h1>
    <?php echo MenuWidget::widget(['name' => 'Safuan']); ?>

    <?php MenuWidget::begin() ?>
        <h2>content</h2>
    <?php MenuWidget::end() ?>


    <div class="container">
        <!-- Шапка -->
        <div style="text-align: center;">
            <a href="/article/article">
                <img src="/logo.jpg" alt="Логотип">
            </a>
        </div>
        <!-- Полоска меню  -->
        <div class="label-danger padding sbs">
            <ul class="pager menu">
                <li>
                    <a href="/article/article" >
                        <span class="glyphicon glyphicon-list-alt"></span>
                        <div> Статьи </div>
                    </a>
                </li>
                <li>
                    <a href="/quote/quote">
                        <span class="glyphicon glyphicon-list-alt"></span>
                        <div> Цитаты </div>
                    </a>
                </li>
                <li>
                    <a href="/image/image">
                        <span class="glyphicon glyphicon-camera"></span>
                        <div> Галлерея </div>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Основная часть сайта -->
        <div>
            <?= $content ?>
        </div>


        <!-- Подвал сайта -->
        <div class="row label-danger" style="margin: 0px">
            <!-- Левая колонка -->
            <div class="col-sm-12 col-md-4">
                <!-- Необходимо будет добавить поиск по сайту -->
            </div>

            <!-- Центральная колонка -->
            <div  class="col-sm-12 col-md-4" style="text-align: center">
                <span> © Step by step </span>
                <div> Почта: YaylyaevSafuan@gmail.com </div>
            </div>

            <!-- Правая колонка, вход в админ панель -->
            <div  class="col-sm-12 col-md-4" style="text-align: center">
            </div>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>