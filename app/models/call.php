<?php

<<<<<<< HEAD
/*
  Call (Model)
  The call model is a php represntation of the table named `calls`.
  See \Chronicle\Base for more infomation.

  @contributers Henry Morgan, Chris Head, Zach Nurcombe
*/

class Call extends ApplicationModel {

  public static $table_name = 'calls';

=======
class Call extends \Chronicle\Base {

  public static $table_name = 'calls';

  public function problems() {
    return Problem::where(['call_id'=>$this->id])->results();
  }

>>>>>>> 9663bf58080a7ff52b1f12bffb55ebeabf151c02
  public function caller(){
    return Personnel::find($this->caller_id);
  }

  public function operator(){
<<<<<<< HEAD
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

=======
   return User::find($this->operator_id);
  }

  public function updated_by(){
   return User::find($this->updated_by);
  }

>>>>>>> 9663bf58080a7ff52b1f12bffb55ebeabf151c02
}
