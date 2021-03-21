<?php

class Validate{


  function input_validate() {
    $error=false;/*エラーの初期値を設定*/
    
    if (empty($this->name)){
        $error = true;
        $this->smarty->assign("name_error","名前を入力してください");
    }

    if (empty($this->e_mail)){
        $error = true;
        $this->smarty->assign("e_mail_error","メーアドレスを入力してください");
    }
    if (!is_array($this->question)){
        $error = true;
        $this->smarty->assign("question_error","1つ以上選択してください");
    }
    if (empty($this->category)){
        $error = true;
        $this->smarty->assign("category_error","選択してください");
    }
    if (empty($this->date)){
        $error = true;
        $this->smarty->assign("date_error","選択してください");
    }
    if (empty($this->time_start && $this->time_end)){
        $error = true;
        $this->smarty->assign("time_error","時間を指定してください");
            }elseif($this->time_start >= $this->time_end){
                $error = true;
                $this->smarty->assign("differ_time_error","正しい時間を指定してください");
    }
    if (empty($this->course)){
        $error = true;
        $this->smarty->assign("course_error","コースを選択してください");
    }
    if (empty($this->comment)){
        $error = true;
        $this->smarty->assign("comment_error","入力してください");
    }
    return $error;
}


  }

  // $validate = new Validate();
?>