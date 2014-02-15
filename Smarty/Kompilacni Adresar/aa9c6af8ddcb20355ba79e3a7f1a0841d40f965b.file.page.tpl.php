<?php /* Smarty version Smarty-3.1.16, created on 2014-01-19 18:39:05
         compiled from "C:\xampp\htdocs\stredisko\Smarty\Sablony\stranka.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1551752c83fca6a64f1-15929889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa9c6af8ddcb20355ba79e3a7f1a0841d40f965b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stredisko\\Smarty\\Sablony\\stranka.tpl',
      1 => 1390153142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1551752c83fca6a64f1-15929889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c83fca7b2e89_70124531',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c83fca7b2e89_70124531')) {function content_52c83fca7b2e89_70124531($_smarty_tpl) {?>
<html>
<head>
    
    <meta charset="UTF-8">

    
    <link href="<?php echo @constant('ADRESA_GLOBALNI_STYL');?>
" rel='stylesheet' type='text/css'>

    
    <script src="<?php echo @constant('ADRESA_JQUERY');?>
"></script>

    
    <script src="<?php echo @constant('ADRESA_GLOBALNI_SKRIPT');?>
"></script>

	
	<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" />
	<script src="nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>

	
	<meta name="pocatecni_stranka" content="<?php echo @constant('POCATECNI_ADRESA');?>
">
</head>

<body>
    <div id="hlavni">
        <div id="nadpis">
            <h1>Středisko Stopa Plzeň</h1>
        </div>
        <div id="menu">
            <button class="odkaz_stredisko">Domů</button>
			<button class="odkaz_severka">23. oddíl Severka</button>
			<button class="odkaz_jizni_kriz">27. oddíl Jižní kříž</button>
			<button class="odkaz_vlocka">28. oddíl Vločka</button>
			<button class="odkaz_hiawatha">29. oddíl Hiawatha</button>
        </div>
		<div class="slider-wrapper theme-default">
			<div class="ribbon"></div>
			<div id="slider" class="nivoSlider">
				<a class="odkaz_severka"><img src="<?php echo @constant('CESTA_FOTKA_SEVERKA');?>
" title="23. oddíl Severka"></a>
				<a class="odkaz_jizni_kriz"><img src="<?php echo @constant('CESTA_FOTKA_JIZNI_KRIZ');?>
"></a>
				<a class="odkaz_vlocka"><img src="<?php echo @constant('CESTA_FOTKA_VLOCKA');?>
"></a>
				<a class="odkaz_hiawatha"><img src="<?php echo @constant('CESTA_FOTKA_HIAWATHA');?>
"></a>
			</div>
		</div>
        <div id="clanek">
			<div id="2" class="info">
				<h1>Skautskké středisko Stopa Plzeň</h1>
			</div>
			<div id="23" class="info">
				<h1>23. oddíl Severka</h1>
			</div>
			<div id="27" class="info">
				<h1>27. oddíl Jižní Kříž</h1>
			</div>
			<div id="28" class="info">
				<h1>28. oddíl Vločka</h1>
			</div>
			<div id="29" class="info">
				<h1>29. oddíl Hiawatha</h1>
        	</div>
    	</div>
		<div id="patka">

		</div>
    </div>
</body>
</html>

<?php }} ?>
