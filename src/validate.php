<?php

$error="";

class Validate{


function validate() {
      $error=false;/*エラーの初期値を設定*/
  
      if ($this->name == ""){
        $error = true;
        $this->smarty->assign("name_error","名前を入力してください");
      }


      if ($this->e_mail == ""){
        $error = true;
        $this->smarty->assign("e_mail_error","名前を入力してください");
      }
      // echo $this->hobby;exit;
      if ($this->question == []){
        $error= true;
        $this->smarty->assign("question_error","趣味を入力してください");
      }
       
      if ($this->category == ""){
        $error = true;
        $this->smarty->assign("category","好きなものを選択してください");
      }
      
      return $error;
      
    }

  }

  // $validate = new Validate();
?>