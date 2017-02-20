<?php

class Personnel extends \Chronicle\Base {

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
