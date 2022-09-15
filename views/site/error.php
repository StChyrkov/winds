<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;
 if ($name == 'Not Found (#404)'){
    $this->title = \Yii::t('app', 'Сторінка не знайдена - Благодійний Фонд "Вітри Змін"');
 } else {
    $this->title = $name;
 }

?>
<div class="container site-error">
    <h1><?= \Yii::t('app', 'Нажаль, такої сторніки на сайті не існує.')?></h1>
    <div class="error-image flex-container">
        <img src="../images/404.jpg" alt="error" class="error-img">
    </div>
    <p class="error-content"><?= \Yii::t('app', 'Оберіть цікавий вам розділ з меню.')?></p>
</div>
