<?php /* Smarty version Smarty-3.1.16, created on 2014-02-07 17:13:16
         compiled from "C:\xampp\htdocs\stredisko\Smarty\Sablony\stranka.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2241452dc133f204438-05851695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77e481be67e2a86936f0f6196c84c06e3402bbc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\stredisko\\Smarty\\Sablony\\stranka.tpl',
      1 => 1391789593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2241452dc133f204438-05851695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dc133f270840_65605470',
  'variables' => 
  array (
    'obrazkySeverka' => 0,
    'adresa' => 0,
    'obrazkyJizniKriz' => 0,
    'obrazkyVlocka' => 0,
    'obrazkyHiawatha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dc133f270840_65605470')) {function content_52dc133f270840_65605470($_smarty_tpl) {?><!DOCTYPE html>
<?php  $_config = new Smarty_Internal_Config('nastaveni.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<html>
<head>
    
    <meta charset="UTF-8">

    
    <link href="<?php echo @constant('ADRESA_GLOBALNI_STYL');?>
" rel='stylesheet' type='text/css'>

    
    <script src="<?php echo @constant('ADRESA_JQUERY');?>
"></script>

	
	<script src="Knihovny/jReject/jquery.reject.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="Knihovny/jReject/jquery.reject.css" type="text/css" />

	
	<link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" />
	<script src="nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>

    
    <script src="<?php echo @constant('ADRESA_GLOBALNI_SKRIPT');?>
"></script>

	
	<meta name="pocatecni_stranka" content="<?php echo @constant('POCATECNI_ADRESA');?>
">
</head>

<body>
    <div id="hlavni">
		<div id="obal-hlavicka">
			<header>
				<div id="nadpis">
					<h1>Středisko Stopa Plzeň</h1>
				</div>
				<div id="menu">
					<button class="odkaz_stredisko">Domů</button>
					<button class="odkaz_severka"><?php echo $_smarty_tpl->getConfigVariable('nadpisSeverka');?>
</button>
					<button class="odkaz_jizni_kriz"><?php echo $_smarty_tpl->getConfigVariable('nadpisJizniKriz');?>
</button>
					<button class="odkaz_vlocka"><?php echo $_smarty_tpl->getConfigVariable('nadpisVlocka');?>
</button>
					<button class="odkaz_hiawatha"><?php echo $_smarty_tpl->getConfigVariable('nadpisHiawatha');?>
</button>
				</div>
			</header>
		</div>
		<div id="obal-hlavni_slider" class="slider-wrapper theme-default">
			<div class="ribbon"></div>
			<div class="nivoSlider 2">
				<a class="odkaz_severka"><img src="<?php echo @constant('ADRESA_FOTKA_SEVERKA');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('nadpisSeverka');?>
"></a>
				<a class="odkaz_jizni_kriz"><img src="<?php echo @constant('ADRESA_FOTKA_JIZNI_KRIZ');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('nadpisJizniKriz');?>
"></a>
				<a class="odkaz_vlocka"><img src="<?php echo @constant('ADRESA_FOTKA_VLOCKA');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('nadpisVlocka');?>
"></a>
				<a class="odkaz_hiawatha"><img src="<?php echo @constant('ADRESA_FOTKA_HIAWATHA');?>
" title="<?php echo $_smarty_tpl->getConfigVariable('nadpisHiawatha');?>
"></a>
			</div>
			<div class="nivoSlider 23">
				<?php  $_smarty_tpl->tpl_vars['adresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['obrazkySeverka']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adresa']->key => $_smarty_tpl->tpl_vars['adresa']->value) {
$_smarty_tpl->tpl_vars['adresa']->_loop = true;
?>
					<img title="<?php echo $_smarty_tpl->getConfigVariable('nadpisSeverka');?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['adresa']->value;?>
">
				<?php } ?>
			</div>
			<div class="nivoSlider 27">
				<?php  $_smarty_tpl->tpl_vars['adresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['obrazkyJizniKriz']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adresa']->key => $_smarty_tpl->tpl_vars['adresa']->value) {
$_smarty_tpl->tpl_vars['adresa']->_loop = true;
?>
					<img title="<?php echo $_smarty_tpl->getConfigVariable('nadpisJizniKriz');?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['adresa']->value;?>
">
				<?php } ?>
			</div>
			<div class="nivoSlider 28">
				<?php  $_smarty_tpl->tpl_vars['adresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['obrazkyVlocka']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adresa']->key => $_smarty_tpl->tpl_vars['adresa']->value) {
$_smarty_tpl->tpl_vars['adresa']->_loop = true;
?>
					<img title="<?php echo $_smarty_tpl->getConfigVariable('nadpisVlocka');?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['adresa']->value;?>
">
				<?php } ?>
			</div>
			<div class="nivoSlider 29">
				<?php  $_smarty_tpl->tpl_vars['adresa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adresa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['obrazkyHiawatha']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adresa']->key => $_smarty_tpl->tpl_vars['adresa']->value) {
$_smarty_tpl->tpl_vars['adresa']->_loop = true;
?>
					<img title="<?php echo $_smarty_tpl->getConfigVariable('nadpisHiawatha');?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['adresa']->value;?>
">
				<?php } ?>
			</div>
		</div>
		<div id="obal-clanek">
			<div id="clanek">
				<div id="2" class="info">
					<h1><?php echo $_smarty_tpl->getConfigVariable('nadpisStredisko');?>
</h1>
					<?php echo $_smarty_tpl->getConfigVariable('textStredisko');?>

				</div>
				<div id="23" class="info">
					<h1><?php echo $_smarty_tpl->getConfigVariable('nadpisSeverka');?>
</h1>
					<?php echo $_smarty_tpl->getConfigVariable('textSeverka');?>

				</div>
				<div id="27" class="info">
					<h1><?php echo $_smarty_tpl->getConfigVariable('nadpisJizniKriz');?>
</h1>
					<?php echo $_smarty_tpl->getConfigVariable('textJizniKriz');?>

				</div>
				<div id="28" class="info">
					<h1><?php echo $_smarty_tpl->getConfigVariable('nadpisVlocka');?>
</h1>
					<?php echo $_smarty_tpl->getConfigVariable('textVlocka');?>

				</div>
				<div id="29" class="info">
					<h1><?php echo $_smarty_tpl->getConfigVariable('nadpisHiawatha');?>
</h1>
					<?php echo $_smarty_tpl->getConfigVariable('textHiawatha');?>

				</div>
			</div>
		</div>
		<div id="obal-patka">
			<footer>

			</footer>
		</div>
    </div>
</body>
</html>

<?php }} ?>
