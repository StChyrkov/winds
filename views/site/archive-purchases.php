<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = \Yii::t('app', 'Архів закупівель - Благодійний Фонд "Вітри Змін"');
?>

<div class="page-banner uppercase">
    <h1><?= \Yii::t('app', 'Архів закупівель')?></h1>
</div>

<div class="background-light padding-up">
    <div class="container">
        <p class="purchase-p-warning"><?= \Yii::t('app', 'В архіві відсутні закупівлі.')?></p>
    </div>
</div>