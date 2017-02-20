<?php

class Call extends \Chronicle\Base {

  public static $table_name = 'calls';

  public function problems() {
    return Problem::where(['call_id'=>$this->id])->results();
  }

  public function caller(){
    return Personnel::find($this->caller_id);
  }

  public function operator(){
   return User::find($this->operator_id);
  }

}
