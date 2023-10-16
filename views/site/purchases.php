<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = \Yii::t('app', 'Закупівлі - Благодійний Фонд "Вітри Змін"');
?>

<div class="page-banner uppercase">
    <h1><?= \Yii::t('app', 'ЗАКУПІВЛІ І ТЕНДЕРИ')?></h1>
</div>
<div class="background-grey padding-up">
    <div class="container">
		<p class="purchase-p big-purchase"><?= \Yii::t('app', 'До подачі заявки просимо ознайомитись з  ')?><a href="../pdf/purchase-policy-10.05.23.pdf" class="link blue-link" target="_blank"><?= \Yii::t('app', 'Політикою Закупівель')?></a><?= \Yii::t('app', ' Благодійної Організації «Благодійний Фонд Вітри Змін».')?></p>
    </div>
	<div class="purchases-buttons flex-container background-grey uppercase">
		<div class="purchases-button-container">
			<a href="active-purchases" class="link more-button button-blue-new purchase-big-button"><?= \Yii::t('app', 'Активні закупівлі')?></a>
		</div>
		<div class="purchases-button-container">
			<a href="archive-purchases" class="link more-button button-blue-new purchase-big-button archive-button"><?= \Yii::t('app', 'Архів')?></a>
		</div>
	</div>
</div>