<?php

class Problem extends \Chronicle\Base {

  public static $table_name = 'problems';

  public function call() {
    Call::find_by(['id'=>$this->call_id]);
  }

  public function get_assigned_to() {
    return User::find($this->get_attribute('assigned_to')->get());
  }

  public function get_submitted_by() {
    return User::find($this->get_attribute('submitted_by')->get());
  }

}
