<?php
require_once('./admin.php');
// require_once('./db_manager.php');


    class Member extends Admin {
       
        protected $session_data="";
        protected $result_id="";
        protected $search_id="";
        protected $util;

        private $member=0;

        function __construct(){
            parent::__construct();
            $this->member = htmlspecialchars($_GET['test1']);
            $this->search = htmlspecialchars($_POST['search']);
              
            // $this->gui = htmlspecialchars($_GET['member']);
            $csv_dl=$_POST["csv_dl"];
        }

 

        function execute(){
            // 継続的認証
           Admin::lo();
       
            if($this->member == 1){
                //検索結果の表示の遷移先
                $this->member1();
            
            }else{
                $this->member1();
            }
           
        }

        function member1(){
            // if($this->){

            // }
            $this->search();
           
            $this->smarty->display('member.tpl');

        }
        // function member2(){
        //     $this->search();

        //     $this->smarty->display('member.detail.tpl');

        // }
  
    // データベースから情報を取得
       
       function search(){

            //TODO htmlspecialcharsを利用しましょう。:済
            $search=htmlspecialchars($_POST["search"]);
            $search_id=htmlspecialchars($_POST["search_id"]);
            $search_name=htmlspecialchars($_POST["search_name"]);
            $search_e_mail=htmlspecialchars($_POST["search_e_mail"]);
            $search_login_id=htmlspecialchars($_POST["search_login_id"]);
            $search_date=htmlspecialchars($_POST["search_date"]);
            //TODO htmlspecialcharsを利用しましょう。:済
            $back=htmlspecialchars($_POST["back"]);
            
            // echo (Dbmanager->exec("select * from inquiry;"));
            // sql文
            $q_id="\n  id = '" . $search_id . "'";
            $q_name="\n name like '" . $search_name . "%". "'";
            $q_e_mail="\n e_mail like '" . "%" . $search_e_mail . "%". "'";
            $q_login_id="\n login_id like '" . $search_login_id . "%". "'";
            $q_date="\n  date = '" . $search_date . "'";
            // ini_set('display_errors', "On");
            $d_q='"';
            // $this->dbh;
            
          
            // $query="SELECT * FROM contact WHERE id = ?";
            $query="SELECT * FROM contact WHERE 1=1";
          // ※1-1で全てANDで繋げれる
          $query .="\n" ."AND" .$q_id;
          $prepare=$this->dbh->prepare($query);
            $prepare ->execute();
            $result=$prepare ->fetchAll(PDO::FETCH_ASSOC);
          var_dump($result);
        //   exit;
            // if($search || $back){
            if(isset($search) || $back){
               
                // $prepare=$this->dbh->prepare($query);
                
              
                if(!empty($search_name)) {
                    // $prepare->bindValue(':name', $search_name,  PDO::PARAM_INT);
                    // $q_id="\n  id =  :id ";
                    // $query .="\n" ."AND" .$q_id;
                
                   
               
                    $this->smarty->assign('id', $search_id);
                 
        
                }
                
            }
          
        }


      
        
    }


    $member = new Member();
    
    $member->execute();