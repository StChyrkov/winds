<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
<!--     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scada:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="background-graphite border-low">
    <?php

    $action = Yii::$app->controller->action->id;

    if (Yii::$app->language == 'en') {
        $langMenu = $action;
        $logo = 'logo-en';
        $langLogo = 'lang-logo-ukr';
    } else {
        $langMenu = 'en/' . $action;
        $logo = 'logo-ukr';
        $langLogo = 'lang-logo-en';
    }

    $navItems = [
        'index' => 'Головна',
        'about' => 'Про фонд',
        'programs' => 'Програми',
        'media' => 'ЗМІ про нас',
        'partners' => 'Партнери',
        'purchases' => 'Закупівлі',
        'policies' => 'Полiтики'
    ];

    ?>
    <div class="container header-nav flex-container">
            <div class="logo-block flex-container">
                <div class = <?= $logo ?>></div>
            </div>
            <nav class="nav">
                <ul class="nav-list flex-container">
                    <div class="nav-container flex-container">
                        <? foreach ($navItems as $url => $name) :?>
                        <? if ($url != $action) :?>
                            <li class="nav-item">
                                <a href="<?= $url ?>" class="link nav-link menu-link uppercase"><?= \Yii::t('app', $name)?></a>
                            </li>
                        <? endif; ?>
                    <? endforeach; ?>
                    </div>
                </ul>
            </nav>
            <div class="right-block flex-container">
                <a href="donate" class="link donate-link uppercase"><?= \Yii::t('app', 'Пiдтримати')?></a>
                <a href="../<?= $langMenu ?>" class="link nav-link lang-link uppercase"><img src="../logo/<?=$langLogo ?>.png" alt="lang-logo" class="lang-img"></a>
            </div>
        </div>
</header>

<main role="main" class="flex-shrink-0">

        <?= $content ?>

</main>

<footer class="site-footer border-up background-graphite">
    <div class="container flex-container footer-items">
        <div>
            <div class="logo-block flex-container">
                <div class = <?= $logo ?>></div>
            </div>
            <nav class="footer-nav">
                <ul class="footer-menu">
                    <li class="footer-link">
                        <a href="about" class="link footer-link"><?= \Yii::t('app', 'Про нас')?></a>
                    </li> 
                    <li class="footer-link">
                        <a href="programs" class="link footer-link"><?= \Yii::t('app', 'Програми')?></a>
                    </li> 
                    <li class="footer-link">
                        <a href="partners" class="link footer-link"><?= \Yii::t('app', 'Партнери')?></a>
                    </li> 
                    <li class="footer-link">
                        <a href="privacy" class="link footer-link"><?= \Yii::t('app', 'Політика конфіденційності')?></a>
                    </li> 
                </ul>
            </nav>
        </div>
        <div class="footer-contacts">
            <p class="contacts-title"><?= \Yii::t('app', 'Контакти')?></p>
                <p class="contacts-item"><?= \Yii::t('app', 'Телефон')?>: +380730376996</p>
                <p class="contacts-item"><?= \Yii::t('app', 'Телефон довіри SOS Roma')?>: +380960376996</p>
                <p class="contacts-item"><?= \Yii::t('app', 'Для партнерiв та донорiв')?>: windsofchanges.od@gmail.com</p>
                <p class="contacts-item"><?= \Yii::t('app', 'Для допомоги')?>: help@windsofchanges.com.ua</p>
        </div>
        <div class="footer-contacts">
                <p class="contacts-title"><?= \Yii::t('app', 'Соціальні мережі')?></p>
                <div class="media-links flex-container">
                    <div class="media-up flex-container">
                        <div class="media-container flex-container">
                            <a href="https://www.facebook.com/WindsofChangesOdessa/" class="link" target="_blank"><img src="../logo/facebook.png" alt="facebook" class="media-img"></a>
                        </div>
                        <div class="media-container flex-container">
                            <a href="https://www.instagram.com/windsofchanges.od/" class="link" target="_blank"><img src="../logo/instagram.png" alt="instagram" class="media-img"></a>
                        </div>
                    </div>
                    <div class="media-low flex-container">
                        <div class="media-container flex-container">
                            <a href="https://twitter.com/VitryZmin" class="link" target="_blank"><img src="../logo/twitter-logo.png" alt="twitter" class="media-img"></a>
                        </div>
                        <div class="media-container flex-container">
                            <a href="https://www.youtube.com/@windsofchanges_CF" class="link" target="_blank"><img src="../logo/youtube-logo.png" alt="youtube" class="media-img"></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
