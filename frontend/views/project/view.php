<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Project $model */

$this->title = $model->name;
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Projects'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="project-view bg-transparent">

    <h1><?= Html::encode($this->title) ?></h1>

   <div class="project-view__dates">
    <span class="fw-bold d-block"><?= Yii::t('app', 'Date:'); ?></span>
    <?= $model->start_date . ' ' . Yii::t('app', 'to') . ' ' . $model->end_date; ?>
   </div>

   <div class="project_view__tech-stack">
    <span class="fw-bold"><?= Yii::t('app', 'Tech stack:'); ?></span>
    <?= $model->tech_stack ?>
   </div>

   <div class="project-view__description d-block">
    <span class="fw-bold"><?= Yii::t('app', 'Description:'); ?></span>
    <?= $model->description ?>
   </div>

</div>
