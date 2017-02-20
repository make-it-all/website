<?php

class Personnel extends \Chronicle\Base {

  public static $table_name = 'personnel';

  public function branch() {
    return Branch::find($this->branch_id);
  }

  public function department() {
    return Department::find($this->department_id);
  }

}
