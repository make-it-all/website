<?php

class Call extends \Chronicle\Base {

  public static $table_name = 'calls';

  public function problems() {
    return Problem::where(['call_id'=>$this->id])->results();
  }

  public function caller(){
    return Personnel::find_by(['id'=>$this->caller_id]);
  }

  public function get_operator(){
    return User::find_by(['id'=>$this->operator_id]);
  }

  public function updated_by(){
    return User::find_by(['id'=>$this->updated_by]);
  }

  public static $validations = [
    'operator_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'caller_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'description' => ['presence'=>true, ],

  ];
}
