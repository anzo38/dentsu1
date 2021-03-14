<?php


require_once('smarty/Smarty.class.php');
// require_once('member.php');
  class Login{
   public $smarty=null;
   public $email="";
   public $password="";
   
 

    
    function __construct(){

      $this->e_mail =  htmlspecialchars($_POST['e_mail']);
      $this->password =  htmlspecialchars($_POST['password']);
      $this->submit_btn = ($_POST['submit_btn']);
      // $this->session = session_id();
      
      // $this->email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
      // $this->loginpass = filter_input(INPUT_POST, 'loginpass', FILTER_SANITIZE_STRING);
   
   
      $this->smarty = new Smarty();
      $this->smarty->template_dir = './templates/';
      $this->smarty->compile_dir  = './templates_c/';

  
      $this->smarty->setConfigDir('./configs/');
      $this->smarty->configLoad('const.conf');
      //displayはexitを含むここに書かない
    

    }
   

    function execute(){
      print_r($this->e_mail);
      print_r($this->password);
     session_start();

      $config_id= $this->smarty->getConfigVars()['login_id'];
      $config_pass= $this->smarty->getConfigVars()['login_pass'];
      $salt= $this->smarty->getConfigVars()['salt'];
     //conf側で管理されているものの暗号化
      $user_id = md5(md5($config_id) . md5($config_pass) . md5($salt) );
     
     //入力されているものの暗号化
      $input_id = md5(md5($this->e_mail). md5($this->password) . md5($salt));
      

     if($this->submit_btn){
      $this->validation();
       if($input_id == $user_id){
         $_SESSION['user']=$input_id;
        header('Location: /member.php');
       }elseif($input_id !== $user_id){
         $this->smarty->assign("login_error","ログインに失敗しました。もう1度入力ください");

       
       }
      }
     
      $this->smarty->display('login.tpl');
   
    }
        
      
      

    function validation() {
      // $error= false;

       if (empty($this->e_mail)){
    
        $this->smarty->assign("e_mail_error","ログインE-mailを入力してください");
        }
        if (empty($this->password)){
    
        
        $this->smarty->assign("pass_error","ログインパスを入力してください");
       }
    }

    
    }

    $login = new Login();
    $login ->execute();
?>