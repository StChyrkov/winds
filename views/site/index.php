<?php

/** @var yii\web\View $this */

$this->title = \Yii::t('app', 'Головна - Благодійний Фонд "Вітри Змін"');
?>
<div class="banner-content border-low">
    <div class="container banner">
        <p class="banner-text uppercase"><?= \Yii::t('app', 'Благодіний Фонд "Вітри Змін"')?></p>
        <p class="banner-text uppercase"><?= \Yii::t('app', 'ПЛАТФОРМА ЖІНОЧИХ ІНІЦІАТИВ')?></p>
    </div>
</div>
<section class="about background-light-blue border-low">
    <div class="section-title flex-container">
        <h2 class="section-h uppercase"><?= \Yii::t('app', 'Про фонд')?></h2>
    </div>
    <div class="container about-content flex-container">
        <div class="about-text">
            <p class="about-p"><?= \Yii::t('app', 'Діяльність Благодійного Фонду «Вітри змін» здебільшого зосереджена на розширенні прав та можливостей, ґендерної рівності та справедливості для дівчат та жінок.')?></p>
            <p class="about-p-last"><?= \Yii::t('app', 'Організація реалізує проекти в галузі правового та соціального захисту, освіти, охорони здоров\'я, попередження ранніх шлюбів, вирішення проблем соціальної та інституційної дискримінації ромів, нарощування потенціалу для професійної підготовки, працевлаштуванню для розширення економічних прав та можливостей дівчаток та жінок уразливих груп.')?></p>
            <div class="button-about-container">
                <a href="about" class="link more-button button-brown button-about"><?= \Yii::t('app', 'Більше про нас')?></a>
            </div>
        </div>
        <div class="about-image">
            <img src="../images/about.jpg" alt="about-us" class="about-img">
        </div>
    </div>
 </section>
 <section class="projects background-light border-low">
    <div class="section-title flex-container">
        <h2 class="section-h uppercase"><?= \Yii::t('app', 'Наші програми')?></h2>
    </div>
    <div class="container projects-content flex-container">
        <div class="project-content">
            <h3 class="project-title"><?= \Yii::t('app', 'Надання екстреної допомоги жінкам та дітям ВПО, які переїхали до Одеси та Одеської області в період військового конфлікту в Україні')?></h3>
            <div class="project-image flex-container">
                <img src="../images/vpo1.jpg" alt="project" class="project-img">
            </div>
        </div>
        <div class="project-content">
            <h3 class="project-title"><?= \Yii::t('app', 'Протидія та запобігання домашньому насиллю та насиллю за ознакою статті ДН/НзОС та дискримінації')?></h3>
            <div class="project-image flex-container">
                <img src="../images/viol1.jpg" alt="project" class="project-img">
            </div>
        </div>
    </div>  
    <div class="button-container flex-container">
        <a href="programs" class="link more-button button-blue"><?= \Yii::t('app', 'ДІЗНАТИСЬ БІЛЬШЕ')?></a>
    </div>
</section>
<section class="media-vid border-low background-light-brown">
    <div class="section-title flex-container">
        <h2 class="section-h uppercase"><?= \Yii::t('app', 'ЗМІ про нас')?></h2>
    </div>
    <div class="container video-block flex-container">
        <div class="video-box">
            <iframe width="500" height="283" src="https://www.youtube.com/embed/yNp9swbUK8g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video-box">
            <iframe width="500" height="283" src="https://www.youtube.com/embed/CdSHMwmhuBs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video-box">
           <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fsvidok.ntn%2Fvideos%2F4801740499885408%2F&show_text=false&width=560&t=0" width="500" height="283" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
        <div class="video-box">
            <iframe width="500" height="283" src="https://www.youtube.com/embed/JS5rUlcTNY4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="button-container flex-container">
        <a href="media" class="link more-button button-blue"><?= \Yii::t('app', 'БІЛЬШЕ СЮЖЕТІВ')?></a>
    </div>
</section>
<section class="partners">
    <div class="section-title flex-container">
        <h2 class="section-h uppercase"><?= \Yii::t('app', 'НАШІ ПАРТНЕРИ')?></h2>
    </div>
    <div class="container partners-cards flex-container">
        <div class="partner-card flex-container">
            <a href="https://www.nhc.nl/" class="link" target="_blank"><img src="../logo/logo-nhc.svg" alt="nhc" class="partner-img"></a>
        </div>
        <div class="partner-card flex-container">
            <a href="https://www.acted.org/en/countries/ukraine/" class="link" target="_blank"><img src="../logo/logo-acted.jpeg" alt="acted" class="partner-img"></a>
        </div>
        <div class="partner-card flex-container">
            <a href="https://www.pactworld.org/country/ukraine" class="link" target="_blank"><img src="../logo/logo-pact.jpeg" alt="pact" class="partner-img"></a>
        </div>
        <div class="partner-card flex-container">
            <a href="https://urgentactionfund.org/" class="link" target="_blank"><img src="../logo/logo-uaf.png" alt="uaf" class="partner-img"></a>
        </div>
        <div class="partner-card flex-container">
            <a href="https://ednannia.ua/" class="link" target="_blank"><img src="../logo/logo-ednannya.png" alt="ednanny" class="partner-img"></a>
        </div>
        <div class="partner-card flex-container">
            <a href="https://trajoskodrom.se/" class="link" target="_blank"><img src="../logo/logo-trajoskodrom.png" alt="trajoskodrom" class="partner-img"></a>
        </div>
        <div class="partner-card flex-container">
            <a href="https://www.irf.ua/" class="link" target="_blank"><img src="../logo/logo-vidrodjennya.svg" alt="vidrodjennya" class="partner-img"></a>
        </div>
        <div class="partner-card flex-container">
            <a href="https://www.we-aid.org/berlin-odessa-express.html" class="link" target="_blank"><img src="../logo/logo-boe.png" alt="boe" class="partner-img"></a>
        </div>
        <div class="button-container">
            <a href="partners" class="link more-button button-brown"><?= \Yii::t('app', 'БІЛЬШЕ ПАРТНЕРІВ')?></a>
        </div>
    </div>
</section>
