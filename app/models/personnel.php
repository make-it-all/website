<?php

/*
  Personnel (Model)
  The Personnel model is a php represntation of the table named `personnel`.
  See \Chronicle\Base for more infomation.

  @contributers Henry Morgan, Chris Head, Zach Nurcombe
*/

class Personnel extends ApplicationModel {

  public static $table_name = 'personnel';

  public function branch() {
    return Branch::find($this->branch_id);
  }

  public function department() {
    return Department::find($this->department_id);
  }

  public static $validations = [
    'personnel_identifier' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'name' => ['presence'=>true, 'length'=>['max', 255]],
    'job_title' => ['presence'=>true, 'length'=>['max', 255]],
    'email' => ['presence'=>true, 'length'=>['max', 255], 'format'=>true, 'uniqueness'=>true],
    'telephone_number' => ['presence'=>true, 'length'=>['max', 255], 'numericality'=>true, 'uniqueness'=>true],
    'branch_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'department_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],

  ];

}
