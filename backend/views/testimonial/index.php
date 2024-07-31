<?php

use common\models\Testimonial;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\TestimonialSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Testimonials');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testimonial-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Testimonial'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            [
                'attribute' => 'project_id',
                'format' => 'raw',
                'filter' => $projects,
                'filterInputOptions' => ['prompt' => 'Selecione..', 'class' => 'form-control'],
                'value' => function($model){
                    return Html::a($model->project->name, ['project/view', 'id' => $model->project_id]);
                },

            ],
            [
                'attribute' => 'customer_image',
                'format' => 'raw',
                'value' => function ($model){

                    if( !$model->customerImage ){

                        return "Sem imagem";

                    }

                    return Html::img($model->customerImage->absoluteUrl(), [
                        'alt' => $model->customer_name,
                        'height' => 80,
                    ]);

                },
            ],
            'title',
            'customer_name',
            //'review:ntext',
            'rating',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Testimonial $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
