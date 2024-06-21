<?php

use yii\helpers\Html;

$this->title = 'Help Center';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="help-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error corrupti voluptas voluptates iure debitis quia inventore quas porro libero. Temporibus corrupti praesentium enim eum molestias at maxime deleniti necessitatibus maiores dolor earum, quo eaque ipsam quod laudantium delectus reiciendis incidunt.
    </p>

    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error corrupti voluptas voluptates iure debitis quia inventore quas porro libero. Temporibus corrupti praesentium enim eum molestias at maxime deleniti necessitatibus maiores dolor earum, quo eaque ipsam quod laudantium delectus reiciendis incidunt.
    </p>

    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error corrupti voluptas voluptates iure debitis quia inventore quas porro libero. Temporibus corrupti praesentium enim eum molestias at maxime deleniti necessitatibus maiores dolor earum, quo eaque ipsam quod laudantium delectus reiciendis incidunt.
    </p>

    <div class="">
        <?= Html::a('Account Settings', ['help/account-settings']) ?>
    </div>

    <div class="">
        <?= Html::a('Login And Security', ['help/login-and-security']) ?>
    </div>

    <div class="">
        <?= Html::a('Privacy', ['help/privacy']) ?>
    </div>

</div>