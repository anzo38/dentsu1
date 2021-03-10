<?php
require_once('smarty/Smarty.class.php');

// require('./check.php');
// require('./database.php');


    class Test {
       
        // private $session_data="";
      
      
        function __construct(){
            // parent::__construct();
            // $this->session_data = new Check();

            $this->smarty = new Smarty();
            $this->smarty->template_dir = './templates/';
            $this->smarty->compile_dir  = './templates_c/';
            $this->smarty->setConfigDir('./configs/');
            $this->smarty->configLoad('const.conf');
          
           
            
        }

 

        function execute(){
        //  ini_set('display_errors', "On");
         
        //  $this->session_data->config_hash();
       
            
           
          
        
   

       
         $this->smarty->display('test.tpl');
    }
        
    
    
}



    $test = new Test();
    
    $test->execute();
?>
