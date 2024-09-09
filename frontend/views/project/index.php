<?php

use common\models\Project;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var frontend\models\ProjectSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Projects');

?>

<div class="project-index container text-center bg-transparent">

    <h1 class="mb-4">
        <?= Html::encode($this->title) ?>
    </h1>

    <div class="">

        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => ['class' => 'col-md-3 mb-3'],
            'itemView' => '_project',
            'layout' => "   
                            <div class='container text-center'>
                                <div class='row align-items-center'>
                                    {items}
                                </div>
                            </div>
                        ",
        ]) ?>

    </div>

</div>
