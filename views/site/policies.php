<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = \Yii::t('app', 'Полiтики - Благодійний Фонд "Вітри Змін"');
?>

<div class="page-banner uppercase">
    <h1><?= \Yii::t('app', 'Полiтики')?></h1>
</div>
<div class="background-light padding-up">
    <div class="container">
	    <p class="purchase-p big-purchase"><?= \Yii::t('app', 'Просимо ознайомитись з дiючими полiтиками БЛАГОДІЙНОЇ ОРГАНІЗАЦІЇ «БЛАГОДІЙНИЙ ФОНД «ВІТРИ ЗМІН».')?></p>
        <p><a href="../pdf/purchase-policy.pdf" class="link policy-link" target="_blank"><?= \Yii::t('app', 'Політика Закупівель')?></a></p>
        <p><a href="../pdf/PSEA-policy.pdf" class="link policy-link" target="_blank"><?= \Yii::t('app', 'Політика PSEA')?></a></p>
        <p><a href="../pdf/ethic-policy.pdf" class="link policy-link" target="_blank"><?= \Yii::t('app', 'КОДЕКС ЕТИЧНОЇ ПОВЕДІНКИ ПРАЦІВНИКІВ')?></a></p>
    </div>
</div>