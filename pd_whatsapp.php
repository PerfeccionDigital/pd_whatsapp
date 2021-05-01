<?php
/**
 * NOTICE OF LICENSE
 *
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement.
 *
 * You must not modify, adapt or create derivative works of this source code
 *
 * @author    Juan Kuga
 * @copyright 2021 Juan Kuga
 * @license   LICENSE.txt
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class pd_whatsapp extends Module
{
    public function __construct()
    {
        $this->name = 'pd_whatsapp';
        $this->displayName = $this->l('WhatsApp');
        $this->description = $this->l('Muestra el icono de whatsApp y te redireciona a WhatsApp');
        $this->tab = "front_office_features";
        $this->author = 'Juan Kuga';
        $this->version = '0.1.0';
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();
    }

    public function install()
    {
        return parent::install();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function getContent()
    {
        return 'Code your content here';
    }
}