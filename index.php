<?php

require 'cesty.php';
require CESTA_SMARTY_KNIHOVNA;

spl_autoload_register(function ($class) {
    include 'Tridy/' . $class . '.php';
});

define ('POCATECNI_ADRESA',  (array_key_exists("stranka", $_GET) ? $_GET["stranka"] : ""));

$smarty = new MySmarty();

//$smarty->setTemplateDir(CESTA_SMARTY_SABLONY);
//$smarty->setCompileDir(CESTA_SMARTY_KOMPILACNI_ADRESAR);
//$smarty->setConfigDir(CESTA_SMARTY_NASTAVENI);
//$smarty->setCacheDir(CESTA_SMARTY_CACHE);

$smarty->display('stranka.tpl');

function pripravvObrazky($cesta, $jmenoPromenne){
	$obrazky = glob($cesta . '/*.{jpg,jpeg,png,JPG,JPEG,PNG}', GLOB_BRACE);
	foreach ($obrazky as &$adresa){
		$adresa = cestaNaAdresu($adresa);
	}
	$GLOBALS['smarty']->assign('obrazky' . $jmenoPromenne, $obrazky);
}

function cestaNaAdresu($cesta){
	$relativni_cesta = substr($cesta, strlen(getcwd()));
	return ADRESA_KOREN_WEBU . ODDELOVAC_ADRESARU . $relativni_cesta;
}