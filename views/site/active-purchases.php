<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = \Yii::t('app', 'Активні закупівлі - Благодійний Фонд "Вітри Змін"');
?>

<div class="page-banner uppercase">
    <h1><?= \Yii::t('app', 'Активні закупівлі')?></h1>
</div>

<div class="background-light padding-up">
    <div class="container">
    	<p class="purchase-p"><?= \Yii::t('app', 'До подачі Пропозиції просимо ознайомитись з  ')?><a href="purchases" class="link"><?= \Yii::t('app', 'Політикою Закупівель')?></a><?= \Yii::t('app', ' БЛАГОДІЙНОЇ ОРГАНІЗАЦІЇ «БЛАГОДІЙНИЙ ФОНД «ВІТРИ ЗМІН».')?></p>
    	<p class="purchase-p-warning"><?= \Yii::t('app', 'Зараз відсутні активні закупівлі.')?></p>
   	</div>
</div>