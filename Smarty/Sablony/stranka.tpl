<!DOCTYPE html>
{config_load file='nastaveni.conf'}

<html>
<head>
    {* Používané meta tagy *}
    <meta charset="UTF-8">

    {* hlavní soubor stylu *}
    <link href="{$smarty.const.ADRESA_GLOBALNI_STYL}" rel='stylesheet' type='text/css'>

    {* JQuery *}
    <script src="{$smarty.const.ADRESA_JQUERY}"></script>

	{* jquery.reject*}
	<script src="Knihovny/jReject/jquery.reject.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="Knihovny/jReject/jquery.reject.css" type="text/css" />

	{* nivo slider *}
	<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" />
	<script src="nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>

    {* Hlavní skript *}
    <script src="{$smarty.const.ADRESA_GLOBALNI_SKRIPT}"></script>

	{* pro správnou počáteční stránku *}
	<meta name="pocatecni_stranka" content="{$smarty.const.POCATECNI_ADRESA}">
</head>

<body>
    <div id="hlavni">
		<div id="obal-hlavicka">
			<header>
				<div id="nadpis">
					<h1>Skautská základna Senečák</h1>
				</div>
				<div id="menu">
					{*<button class="odkaz_stredisko">Domů</button>*}
				</div>
			</header>
		</div>
		<div id="obal-hlavni_slider" class="slider-wrapper theme-default">
			<div class="ribbon"></div>
			<div class="nivoSlider 2">
				<a class="odkaz_severka"><img src="{$smarty.const.ADRESA_FOTKA_SEVERKA}" title="{#nadpisSeverka#}"></a>
				<a class="odkaz_jizni_kriz"><img src="{$smarty.const.ADRESA_FOTKA_JIZNI_KRIZ}" title="{#nadpisJizniKriz#}"></a>
				<a class="odkaz_vlocka"><img src="{$smarty.const.ADRESA_FOTKA_VLOCKA}" title="{#nadpisVlocka#}"></a>
				<a class="odkaz_hiawatha"><img src="{$smarty.const.ADRESA_FOTKA_HIAWATHA}" title="{#nadpisHiawatha#}"></a>
			</div>
			<div class="nivoSlider 23">
				{foreach from=$obrazkySeverka item=adresa}
					<img title="{#nadpisSeverka#}" data-src="{$adresa}">
				{/foreach}
			</div>
			<div class="nivoSlider 27">
				{foreach from=$obrazkyJizniKriz item=adresa}
					<img title="{#nadpisJizniKriz#}" data-src="{$adresa}">
				{/foreach}
			</div>
			<div class="nivoSlider 28">
				{foreach from=$obrazkyVlocka item=adresa}
					<img title="{#nadpisVlocka#}" data-src="{$adresa}">
				{/foreach}
			</div>
			<div class="nivoSlider 29">
				{foreach from=$obrazkyHiawatha item=adresa}
					<img title="{#nadpisHiawatha#}" data-src="{$adresa}">
				{/foreach}
			</div>
		</div>
		<div id="obal-clanek">
			<div id="clanek">
				<div id="2" class="info">
					<h1>{#nadpisStredisko#}</h1>
					{#textStredisko#}
				</div>
				<div id="23" class="info">
					<h1>{#nadpisSeverka#}</h1>
					{#textSeverka#}
				</div>
				<div id="27" class="info">
					<h1>{#nadpisJizniKriz#}</h1>
					{#textJizniKriz#}
				</div>
				<div id="28" class="info">
					<h1>{#nadpisVlocka#}</h1>
					{#textVlocka#}
				</div>
				<div id="29" class="info">
					<h1>{#nadpisHiawatha#}</h1>
					{#textHiawatha#}
				</div>
			</div>
		</div>
		<div id="obal-patka">
			<footer>
				<div id="prihlasovani"></div>
			</footer>
		</div>
    </div>
</body>
</html>

