<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = Yii::$app->name;
?>
<div class="site-index">

    
    <div class="p-5 mb-4 bg-transparent rounded-3 text-center">

        <?= Html::img('@web/images/gui-emoji2.png', [
            'alt' => Yii::t('app', 'My profile photo'),
            'class' => 'side-index__photo',
        ]); ?>

        <div class="container-fluid py-5 text-center">

            <h1 class="site-index__h1"><?= Yii::t('app', 'Hello, I am Guilherme Lima! ') ?></h1>

            <p class="fs-5"><?= Yii::t('app', 'PHP Developer and learning about Yii2 ') ?></p>

            <p>
                <?= Html::a(Yii::t('app', 'See my work'), ['/project'], ['class' => ['btn btn-primary']]); ?>
            </p>

        </div>

    </div>

</div>
