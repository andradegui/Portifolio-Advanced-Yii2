<?php

use yii\helpers\Html;
use common\models\Project;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Project $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Projects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <p>
        <?= Html::a(Yii::t('app', 'New Testimonial'), ['testimonial/create', 'project_id' => $model->id]); ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'label' => Yii::t('app', 'Images'),
                'format' => 'raw',
                'value' => function($model){

                    if( !$model->hasImages() ){

                        return "Sem imagem";

                    }

                    $imagesHtml = "";

                    foreach( $model->images as $image ){
                        $imagesHtml .= Html::img($image->file->absoluteUrl(), [
                            'height' => 200,
                            'class' => 'project-view__image'
                        ]);
                    }

                    return $imagesHtml;
                }

            ],
            'tech_stack:raw',
            'description:ntext',
            'start_date',
            'end_date',           
        ],
    ]) ?>

    <h2><?= Yii::t('app', 'Testimonials'); ?></h2>

    <?php foreach( $model->testimonials as $testimonial ): ?>

        <div> 
            <?= Html::a($testimonial->title, ['testimonial/view', 'id' => $testimonial->id]); ?> 
        </div>

    <?php endforeach; ?>

</div>
