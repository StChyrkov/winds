<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = \Yii::t('app', 'Полiтики - Благодійний Фонд "Вітри Змін"');
?>

<div class="page-banner uppercase">
    <h1><?= \Yii::t('app', 'Полiтики')?></h1>
</div>
<div class="background-grey padding-up">
    <div class="container">
	    <p class="purchase-p big-purchase"><?= \Yii::t('app', 'Політики Благодійної Організації «Благодійний Фонд Вітри Змін»')?></p>
        <p><a href="../pdf/purchase-policy-10.05.23.pdf" class="link policy-link" target="_blank"><?= \Yii::t('app', 'Політика закупівель')?></a></p>
        <p><a href="../pdf/PSEA-policy.pdf" class="link policy-link" target="_blank"><?= \Yii::t('app', 'Політика з протидії сексуальної експлуатації та насильству')?></a></p>
        <p><a href="../pdf/ethic-policy.pdf" class="link policy-link" target="_blank"><?= \Yii::t('app', 'Етичний кодекс БО «БФ Вітри Змін»')?></a></p>
        <p><a href="../pdf/risk-policy.pdf" class="link policy-link" target="_blank"><?= \Yii::t('app', 'Політика оцінки ризиків закупівель та надійності контрагентів')?></a></p>
        <p><a href="../pdf/behaviour-policy.pdf" class="link policy-link" target="_blank"><?= \Yii::t('app', 'Політика стандартів поведінки працівників')?></a></p>
        <p><a href="../pdf/anticorruption-policy.pdf" class="link policy-link" target="_blank"><?= \Yii::t('app', 'АНТИКОРУПЦІЙНА ПОЛІТИКА БЛАГОДІЙНОЇ ОРГАНІЗАЦІЇ «БЛАГОДІЙНИЙ ФОНД «ВІТРИ ЗМІН»')?></a></p>
    </div>
</div>