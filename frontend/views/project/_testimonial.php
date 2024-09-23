<?php

use yii\helpers\Html;
use kartik\rating\StarRating;

?>

<div class="project-view__testimonial">

    <?php

        if ($model->customerImage) {

            echo Html::img($model->customerImage->absoluteUrl(), ['class' => 'project-view__testimonial-image']);
        }

    ?>

    <?= $model->customer_name ?>

    <?=
        StarRating::widget([
            'name' => 'rating',
            'value' => $model->rating,
            'pluginOptions' => [
                'displayOnly' => true,
                'size' => 'sm',
            ]
        ]);
    ?>

    <div class="font-weight-bold">
        <?= $model->title ?>
    </div>

    <div class="">
        <?= $model->review ?>
    </div>


</div>