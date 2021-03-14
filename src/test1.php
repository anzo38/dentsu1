<?php
require_once('smarty/Smarty.class.php');

// require('./check.php');
// require('./database.php');


    class Test1  {
       
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
       
    
           
            $this->search();
        


       
         $this->smarty->display('test1.tpl');
    }
        
    private function createState($v,$q,$state){
		if($v != ""){
			$q .= " AND " . $state;
		}
		return $q;
	}

    function q($count){

        $query="select * from contact";
          if($count=0){
            $query.="";
        }elseif($count=1){
            $query.= "where" ;
        }elseif($count=2){
            $query.= "\n" ."and" ;
        }
        return($this->q(0));  
    }

    function search(){
      
        $search=$_POST["search"];

        $search_id=$_POST["id"];
        $search_name=htmlspecialchars($_POST["name"]);
        $search_e_mail=htmlspecialchars($_POST["e_mail"]);
        $search_login_id=htmlspecialchars($_POST["login_id"]);
        $search_date=htmlspecialchars($_POST["date"]);
        
       
       
        $query="select * from contact";
        
        $q_id="\n  id = '" . $search_id . "'";
        $q_name="\n name like '" . $search_name . "%". "'";
        $q_e_mail="\n e_mail = like '" . "%". $search_e_mail . "%". "'";
        // $q_login_id="login_id like '" . $search_login_id .  "%"."'";
        // $q_date="date = '" . $search_date . "'";
        // postされたら

        //select * from contact;
        // where id=3;からじゃなければ、かつ一回
        // and name="yamazaki";二回目以降
        //select * from contact where id= and name="";
       
            // $this->smarty->assign('id', $search_id);
            // $this->smarty->assign('name', $search_name);
            // $this->smarty->assign('e_mail', $search_e_mail);
            // $this->smarty->assign('login_id', $search_login_id);
            // $this->smarty->assign('date', $search_date);
            // $count=0;
            // if($count=0){
            //     $query.="";
            // }elseif($count=1){
            //     $query.= "\n" ."where" ;
            // }elseif($count=2){
            //     $query.= "\n" ."and" ;
            // }
            if(empty($search)){
                $this->q(0);
               return $query;

       }
       if(!empty($search_id )&&$count=1){
        $query.= $q_id;
    }elseif(!empty($search_id)&&$count=2){
        
            $query.= $q_id;
   
        } 
    
        //     if($this->q(1)){
               
        //     $r=$this->createState($search_id,$query,$q_id);
        // }
            


            //   if(!empty($search_id)){
            //     $count=1;
            //       $query.= $q_id;
              
            //   }else{
            //     $count=2;
            //   }
            //   if(!empty($search_name)){
            //     $count=1;
            //     $query.= $q_name;
            // }else{
            //     $count=2;
            // }

              var_dump($this->q(0));
          }
          
      
           
                // $result = DbMabager::getInstance()->exec($query);
             
          
        
            // var_dump($a);
            // if($search_id){
            //     $result1 = DbMabager::getInstance()->exec("select * from contact where id = '" . $search_id . "'");
            //     // var_dump($result1);
            //    $array1=$result1;
            // }
            // if($search_name){
            //     $result2 = DbMabager::getInstance()->exec("select * from contact where name like '" . $search_name . "%". "'");
            //     // var_dump($result2);
            //     $array2=$result2;
            // }
            // if($search_e_mail){
            //     $result3 = DbMabager::getInstance()->exec("select * from contact where e_mail like '" . "%". $search_e_mail . "%" . "'");
            //     var_dump($result3);
            //     $array3=$result3;
            // }
            // if($search_login_id){
            //     $result4 = DbMabager::getInstance()->exec("select * from contact where login_id like '" . $search_login_id .  "%"."'");
            //     var_dump($result4);
            // }
            // if($search_date){
            //     $result5 = DbMabager::getInstance()->exec("select * from contact where date = '" . $search_date . "'");
            //     var_dump($result5);
            // }
           


   

       
    
  

    
        // mysqliからCSVファイルに出力する
                //  $serect_table1 = "select 'id', 'name', 'food', 'area', 'login_id', 'pass' union select * from table1 into outfile '/tmp/data.csv' fields terminated by ',' enclosed by ',' escaped by ',' lines terminated by '\r\n';";
            //     $serect_table1 = "SELECT * FROM  main";
                
            //      $prepare = $dbh->query($serect_table1);
            //      $results = $prepare->fetchAll(PDO::FETCH_ASSOC);
            //     //  $prepare ->execute();
            //     //  var_dump($prepare);
            //      return $results;
            //     //  var_dump($results);
            //   }
        

        //       function createCsv(){
        // $data = array();
        // $csv = null;

       


            //       }




      

}



    $test1 = new Test1();
    
    $test1->execute();
?>
