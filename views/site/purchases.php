<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = \Yii::t('app', 'Закупівлі - Благодійний Фонд "Вітри Змін"');
?>

<div class="page-banner uppercase">
    <h1><?= \Yii::t('app', 'Закупівлі')?></h1>
</div>
<div class="purchases-buttons flex-container border-low background-light-brown uppercase">
	<div class="purchases-button-container">
		<a href="active-purchases" class="link more-button button-blue purchase-big-button"><?= \Yii::t('app', 'Активні закупівлі')?></a>
	</div>
	<div class="purchases-button-container">
		<a href="archive-purchases" class="link more-button button-blue purchase-big-button"><?= \Yii::t('app', 'Архів закупівель')?></a>
	</div>
</div>
<div class="background-light padding-up">
    <div class="container">
	<p class="purchase-p big-purchase"><?= \Yii::t('app', 'До подачі Пропозиції просимо ознайомитись з  ')?><a href="../pdf/purchase-policy.pdf" class="link" target="_blank"><?= \Yii::t('app', 'Політикою Закупівель')?></a><?= \Yii::t('app', ' БЛАГОДІЙНОЇ ОРГАНІЗАЦІЇ «БЛАГОДІЙНИЙ ФОНД «ВІТРИ ЗМІН».')?></p>
    </div>
</div>