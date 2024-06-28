<?php

use yii\helpers\Html;
use yii\web\JqueryAsset;
use yii\widgets\ActiveForm;
use kartik\editors\Summernote;

/** @var yii\web\View $this */
/** @var common\models\Project $model */
/** @var yii\widgets\ActiveForm $form */

$this->registerJsFile(
    '@web/js/projectForm.js',
    ['depends' => [JqueryAsset::class]]
);

?>

<div class="project-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tech_stack')->widget(Summernote::class, [
        'useKrajeePresets' => true,
    ]);  ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'start_date')->widget(\yii\jui\DatePicker::classname(), [
        'options' => ['readOnly' => true],
    ]) ?>

    <?= $form->field($model, 'end_date')->widget(\yii\jui\DatePicker::classname(), [
        'options' => ['readOnly' => true]
    ]) ?>

    <?php foreach( $model->images as $image ): ?>

        <div class="" id="project-form__image-container-<?= $image->id ?>">

            <?= Html::img($image->file->absoluteUrl(), [
                'height' => 200,
                'class' => 'mb-3',
                'class' => 'project-view__image'
            ]) ?>
    
            <?= Html::button(Yii::t('app', 'Delete'), [
                'class' => 'mb-3 btn btn-danger btn-delete-project',
                'data-project-image-id' => $image->id
            ]) ?>
    
            <div id="project-form__image-error-message-<?= $image->id ?>" class="text-danger"></div>

        </div>

    <?php endforeach; ?>

    <?= $form->field($model, 'imageFile')->fileInput(['class' => 'form-control']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
