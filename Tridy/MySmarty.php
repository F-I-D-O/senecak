<?php

class MySmarty extends Smarty{

    function __construct()
    {
        parent::__construct();

        $this->setTemplateDir(CESTA_SMARTY_SABLONY);
        $this->setCompileDir(CESTA_SMARTY_KOMPILACNI_ADRESAR);
        $this->setConfigDir(CESTA_SMARTY_NASTAVENI);
        $this->setCacheDir(CESTA_SMARTY_CACHE);

        $this->caching = Smarty::CACHING_OFF;


    }
} 