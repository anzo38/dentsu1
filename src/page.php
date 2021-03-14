<?php
class Page {

  private static $singleton;
  private static $smarty=null;

  public static function smarty(){
    // $this->smarty = new Smarty();
    // $this->smarty->template_dir = './templates/';
    // $this->smarty->compile_dir  = './templates_c/';
    // $this->smarty->setConfigDir('./configs/');
    // $this->smarty->configLoad('const.conf');
    if (!isset(self::$singleton)) {
      self::$singleton = new Page();    
  }

  return self::$singleton;
  }



}