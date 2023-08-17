<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class RafModule extends Module
{
    public function __construct()
    {
        $this->name = 'rafModule';
        $this->tab = 'emailing';
        $this->version = '1.0.0';
        $this->author = 'Raphaël DELAYGUES';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => '8.99.99',
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Raf Module');
        $this->description = $this->l('Premier exercice.');

        $this->confirmUninstall = $this->l('Êtes-vous certain de vouloir désinstaller ce module super-méga-chouette ?');

        if (!Configuration::get('RAF_MODULE')) {
            $this->warning = $this->l('Aucun nom fourni.');
        }
    }

    public function install(): bool
    {
        if (parent::install()
            && $this->registerHook('actionUpdateQuantity')) return true;

        return false;
    }

    public function hookActionUpdateQuantity($params)
    {
        Mail::Send(
            (int)(Configuration::get('PS_LANG_DEFAULT')),
            'miseAJourStock',
            'Mise à jour du stock',
            array(
                '{email}' => Configuration::get('PS_SHOP_EMAIL'), // mail de l'expéditeur
                '{message}' => "Le stock du produit {$params['id_product']} a été mis à jour. Nouvelle quantité : {$params['quantity']}." // corps du mail
            ),
            Configuration::get('PS_SHOP_EMAIL'), // mail du destinataire
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            _PS_MODULE_DIR_ . 'rafModule/mails' //chemin du template à utiliser
        );
    }
}
