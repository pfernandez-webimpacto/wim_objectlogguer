<?php
  if (!defined('_PS_VERSION_'))
    exit;
   
  class Wim_objectlogguer extends Module
  {

    public function __construct()
  {
    $this->name = 'wim_objectlogguer';
    $this->tab = 'front_office_features';
    $this->version = '1.0.0';
    $this->author = 'Firstname Lastname';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_); 
    $this->bootstrap = true;
 
    parent::__construct();
 
    $this->displayName = $this->l('wim_objectlogguer');
    $this->description = $this->l('Description of my module.');
 
    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
 
    if (!Configuration::get('MYMODULE_NAME')) {      
      $this->warning = $this->l('No name provided');

    }

  }


    public function install()
    {    
       include(dirname(__FILE__).'\sql\install.php');
       // return parent::install();

       return parent::install() &&
       $this->registerHook('actionObjectAddBefore') &&
       $this->registerHook('actionObjectAddBefore') &&
       $this->registerHook('actionObjectDeleteBefore') &&
       $this->registerHook('actionObjectDeleteAfter') &&
       $this->registerHook('actionObjectUpdateBefore') &&
       $this->registerHook('actionObjectUpdateAfter');
    }


     public function hookActionObjectUpdateBefore($params)
    {
        Db::getInstance()->insert('objectlogguer',array(
            'affected_object' => $params['object']->id, 
            'action_type' =>   get_object_vars($params['object']),
            'object_type' =>  get_class($params['object']),
            'message' => "Object ". get_class($params['object']) . " with id " . $params['object']->id . " XXXXX",
            'date_add' => date("Y-m-d H:i:s"),
        ));
    }







  }