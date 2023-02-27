<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
$this->beginContent('@backend/views/layouts/base.php');
?>




    <main role="main" class="d-flex" style="padding-top: 32px;">
        <?= $this->render("_sidebar")?>
        <div class="content-wrapper p-3">

            <!--        --><?php //= Breadcrumbs::widget([
            //            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            //        ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

<?php
    $this->endContent();
?>

<!--<footer class="footer mt-auto py-3 text-muted">-->
<!--    <div class="container">-->
<!--        <p class="float-start">&copy; --><?php //= Html::encode(Yii::$app->name) ?><!-- --><?php //= date('Y') ?><!--</p>-->
<!--        <p class="float-end">--><?php //= Yii::powered() ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->
