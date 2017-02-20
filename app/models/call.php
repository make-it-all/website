<?php

/*
  Call (Model)
  The call model is a php represntation of the table named `calls`.
  See \Chronicle\Base for more infomation.

  @contributers Henry Morgan, Chris Head, Zach Nurcombe
*/

class Call extends ApplicationModel {

  public static $table_name = 'calls';

  public function caller(){
    return Personnel::find($this->caller_id);
  }

  public function operator(){
    return User::find($this->operator_id);
  }

  public function updated_by(){
    return User::find($this->updated_by);
  }

  public static $validations = [
    'operator_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'caller_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'description' => ['presence'=>true, ],

  ];

}
