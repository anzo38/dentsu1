<?php
 require_once('smarty/Smarty.class.php');

class Check {
  protected $smarty=null;
  protected $email="";
  protected $loginpass="";
  protected $public="";

  function __construct(){
   
    session_start();
   
      // $this->submit_btn = ($_POST['submit_btn']);
      // $this->email =  htmlspecialchars($_POST['email']);
      // $this->loginpass =  htmlspecialchars($_POST['loginpass']);

       $this->smarty = new Smarty();
       $this->smarty->template_dir = './templates/';
       $this->smarty->compile_dir  = './templates_c/';
   
     
       $this->smarty->setConfigDir('./configs/');
       $this->smarty->configLoad('const.conf');
     
    }
 
    function config_hash(){
      // session_start();
   
     
       $config_id= $this->smarty->getConfigVars()['login_id'];
       $config_pass= $this->smarty->getConfigVars()['login_pass'];
       $salt= $this->smarty->getConfigVars()['salt'];
       //conf側で管理されているものの暗号化
       $user_id = md5(md5($config_id) . md5($config_pass) . md5($salt) );
      //  ※login.phpでSESSIONに値入れている
      //  ここ↓で入れ直すと無条件でcong管理の値を格納している
      //  $_SESSION['user'] = $user_id;
       $user = $_SESSION['user'];
          // print_r($_SESSION['user']);echo "\n";
          // print_r($user);echo "\n";
          // print_r($_SESSION['user']);echo "\n";


          if($user != $user_id){

            header('Location: /login.php');
            exit;
         
          }  // }else{

          //   $this->smarty->display('member.tpl');
          // }
       

     
     
      // $this->smarty->display('member.tpl');
    }

 

   
 
  }
  // $c = new Check();
  // $c->config_hash();
