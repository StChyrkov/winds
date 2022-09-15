<?php

/** @var yii\web\View $this */

$this->title = \Yii::t('app', 'Внесок - Благодійний Фонд "Вітри Змін"');
?>

<div class="page-banner uppercase">
    <h1><?= \Yii::t('app', 'Зробити внесок')?></h1>
</div>
<div class="background-light padding-up">
	<div class="container">
		<p class="page-p"><?= \Yii::t('app', 'Для підтримки жінок та дівчат, народу України у подоланні наслідків російської збройної агресії.')?></p>
		<p class="page-p"><?= \Yii::t('app', 'Кожен ваш внесок дозволить нам підтримати жінок та дівчат, які стикаються із гуманітарними викликами, викликаними повномасштабними воєнними діями, а також активісток, які знаходяться на передовій волонтерського руху і допомагають тим, хто найбільше цього потребує!')?></p>
		<p class="page-p"><?= \Yii::t('app', 'Кошти будуть направлені на забезпечення нагальних потреб у воді, їжі, медикаментах, засобах гігієни, засобах зв’язку та інших базових потреб, з увагою до найбільш вразливих груп жінок та дівчат.')?></p>
		<p class="page-p"><?= \Yii::t('app', 'Ви можете зробити внесок, перерахуваши кошти за нашими банківскькими реквізитами. Зараз ми працюємо над доданням інших платіжних методів, які скоро будуть доступні.')?></p>
		<section class="bank-uah">
			<p class="bank-name"><?= \Yii::t('app', 'Гривня')?></p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Назва підприємства:')?></span> «БЛАГОДІЙНИЙ ФОНД ”ВІТРИ ЗМІН”» 42146311</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Повна назва банку:')?></span> <?= \Yii::t('app', 'АКЦІОНЕРНЕ ТОВАРИСТВО КОМЕРЦІЙНИЙ БАНК «ПРИВАТБАНК»')?></p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Скорочена назва банку:')?></span> <?= \Yii::t('app', 'АТ КБ «ПРИВАТБАНК»')?></p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'IBAN-код:')?></span> UA78 305299 00000 26008014904227</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'МФО банку:')?></span> 305299</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'ЄДРПОУ (ЗКПО) банку:')?></span> 14360570</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Ліцензія НБУ:')?></span> <?= \Yii::t('app', '№22 від 05.10.2011 р.')?></p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'SWIFT код:')?></span> PBANUA2X</p>
		</section>
		<section class="bank-usd">
			<p class="bank-name"><?= \Yii::t('app', 'Долар США')?></p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Назва підприємства:')?></span> БО ВІТРИ ЗМІН БФ</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'IBAN-код:')?></span> UA173052990000026008044919259</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Назва банку:')?></span> <?= \Yii::t('app', 'АТ КБ «ПРИВАТБАНК»')?></p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'SWIFT код:')?></span> PBANUA2X</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Адреса підприємства:')?></span> 65000, УКРАЇНА, ОБЛ. ОДЕСЬКА, М. ОДЕСА, ВУЛ. АКАДЕМІКА ВІЛЬЯМСА, Б. 44, КОРП. 1, КВ. 33.</p>
			<p class="bank-content bank-cor"><span class="bank-span"><?= \Yii::t('app', 'Банки кореспонденти:')?></span></p>
			<div class="cor-bank-container">
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Рахунок у банку-кореспонденті:')?></span> 001-1-000080</p>
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'SWIFT Code банку-кореспондента:')?></span> CHASUS33</p>
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Банк-кореспондент:')?></span> JP Morgan Chase Bank, New York ,USA</p>
			</div>
			<div class="cor-bank-container">
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Рахунок у банку-кореспонденті:')?></span> 890-0085-754</p>
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'SWIFT Code банку-кореспондента:')?></span> IRVT US 3N</p>
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Банк-кореспондент:')?></span> The Bank of New York Mellon, New York, USA</p>
			</div>
			<div class="cor-bank-container">
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Рахунок у банку-кореспонденті:')?></span> 36445343</p>
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'SWIFT Code банку-кореспондента:')?></span> CITI US 33</p>
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Банк-кореспондент:')?></span> Citibank N.A., NEW YORK, USA</p>
			</div>
		</section>
		<section class="bank-eur">
			<p class="bank-name"><?= \Yii::t('app', 'Євро')?></p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Назва підприємства:')?></span> БО ВІТРИ ЗМІН БФ</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'IBAN-код:')?></span> UA333052990000026002044914131</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Назва банку:')?></span> <?= \Yii::t('app', 'АТ КБ «ПРИВАТБАНК»')?></p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'SWIFT код:')?></span> PBANUA2X</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Адреса підприємства:')?></span> 65000, УКРАЇНА, ОБЛ. ОДЕСЬКА, М. ОДЕСА, ВУЛ. АКАДЕМІКА ВІЛЬЯМСА, Б. 44, КОРП. 1, КВ. 33.</p>
			<p class="bank-content bank-cor"><span class="bank-span"><?= \Yii::t('app', 'Банки кореспонденти:')?></span></p>
			<div class="cor-bank-container">
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Рахунок у банку-кореспонденті:')?></span> 400886700401</p>
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'SWIFT Code банку-кореспондента:')?></span> COBADEFF</p>
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Банк-кореспондент:')?></span> Commerzbank AG, Frankfurt am Main, Germany</p>
			</div>
			<div class="cor-bank-container">
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Рахунок у банку-кореспонденті:')?></span> 6231605145</p>
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'SWIFT Code банку-кореспондента:')?></span> CHASDEFX</p>
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Банк-кореспондент:')?></span> J.P.MORGAN AG, FRANKFURT AM MAIN, GERMANY</p>
			</div>
		</section>
		<section class="bank-gbp">
			<p class="bank-name"><?= \Yii::t('app', 'Британський фунт')?></p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Назва підприємства:')?></span> БО ВІТРИ ЗМІН БФ</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'IBAN-код:')?></span> UA813052990000026002034907329</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Назва банку:')?></span> <?= \Yii::t('app', 'АТ КБ «ПРИВАТБАНК»')?></p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'SWIFT код:')?></span> PBANUA2X</p>
			<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Адреса підприємства:')?></span> 65000, УКРАЇНА, ОБЛ. ОДЕСЬКА, М. ОДЕСА, ВУЛ. АКАДЕМІКА ВІЛЬЯМСА, Б. 44, КОРП. 1, КВ. 33.</p>
			<p class="bank-content bank-cor"><span class="bank-span"><?= \Yii::t('app', 'Банки кореспонденти:')?></span></p>
			<div class="cor-bank-container">
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Рахунок у банку-кореспонденті:')?></span> 24549501 SORT CODE 609242</p>
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'SWIFT Code банку-кореспондента:')?></span> CHASGB2L</p>
				<p class="bank-content"><span class="bank-span"><?= \Yii::t('app', 'Банк-кореспондент:')?></span> J P Morgan Chase Bank, Bournemouth, UK</p>
			</div>
		</section>
	</div>
</div>