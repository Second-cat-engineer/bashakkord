<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">

        <!-- можем задать некие общие параметры, а внутри вида конкретных страниц их настраивать -->
        <h1><?php echo $this->params['pagehead'] ?? ''; ?></h1>


        <!-- блоки, логика о том что, если блок был определен выводи его, а иначе пустой заголовок -->
        <?= $this->blocks['articlehead'] ?? 'Пустой заголовок'; ?>
        <?php if (isset($this->blocks['articlehead'])): ?>
            <?= $this->blocks['articlehead'] ?>
        <?php else: ?>
            error
        <?php endif ?>

        <!-- переменная в которую передасться при сборке страницы вид
        // т.е. сначала рендериться страница index.php, потом рендерит шаблон передавая его в переменную
        // т.е $content это вид, а все остальное шаблон -->
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
