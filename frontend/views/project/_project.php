<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;

?>

<div class="item bg-light border p-3 rounded-4">

    <a href="<?= Url::to(['project/view', 'id' => $model->id]) ?>" class="project__link">
    
        <?php
    
            $images = $model->imageAbsoluteUrls();
    
            if( count($images) > 0 ){
    
                echo Html::img($images[0], ['alt' => $model->name, 'class' => 'project__image']);
    
            }
    
        ?>
    
        <div class="project__title">
            <?= $model->name;?>
        </div>
    
    </a>

</div>
