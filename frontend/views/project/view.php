<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap4\Carousel;

/** @var yii\web\View $this */
/** @var common\models\Project $model */

$this->title = $model->name;
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Projects'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="project-view bg-transparent">

    <h1><?= Html::encode($this->title) ?></h1>

   <div class="project-view__dates mb-4">
    <span class="fw-bold d-block"><?= Yii::t('app', 'Date:'); ?></span>
    <?= $model->start_date . ' ' . Yii::t('app', 'to') . ' ' . $model->end_date; ?>
   </div>

   <?= 
        Carousel::widget([
            'items' => $model->carousselImages(),
            // 'options' => ['class' => '']
        ]);
   ?>

   <div class="project_view__tech-stack mb-4">
    <span class="fw-bold"><?= Yii::t('app', 'Tech stack:'); ?></span>
    <?= $model->tech_stack ?>
   </div>

   <div class="project-view__description mb-4">
    <span class="fw-bold d-block"><?= Yii::t('app', 'Description:'); ?></span>
    <?= $model->description ?>
   </div>

   <?php if($model->testimonials): ?>
    <h2><?= Yii::t('app', 'Testimonials'); ?></h2>
   <?php endif; ?>

</div>
