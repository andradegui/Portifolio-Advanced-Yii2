<?php

use yii\helpers\Url;
use yii\helpers\Html;
use kartik\file\FileInput;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;
use kartik\rating\StarRating;

/** @var yii\web\View $this */
/** @var common\models\Testimonial $model */
/** @var yii\widgets\ActiveForm $form */
/** @var array $projects */
?>

<div class="testimonial-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'project_id')->widget(Select2::classname(), [
    'data' => $projects,
    'options' => ['placeholder' => 'Selecione um projeto'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]); ?>

    <?= $form->field($model, 'imageFile')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'initialPreview' => $model->imageAbsoteUrl(), 
            'initialPreviewAsData' => true,
            'initialPreviewConfig' => $model->imageConfig(),
            'showUpload' => false,
            'deleteUrl' => Url::to(['testimonial/delete-customer-image']),
        ],
    ]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'review')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rating')->widget(StarRating::classname(), [
        'pluginOptions' => ['step' => 1.0]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
