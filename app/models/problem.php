<?php

class Problem extends \Chronicle\Base {

  public static $table_name = 'problems';

  public function call() {

      Call::find_by(['id'=>$this->call_id]);
    }

  public static $validations = [
    'call_id' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'submitted_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'assigned_to' => ['numericality'=>true, 'length'=>['max',11]],
    'worked_on' => ['presence'=>true, 'numericality'=>true, 'length'=>['equal',1], 'inclusion'=>['0','1']],
    'solution_id' => ['numericality'=>true, 'length'=>['max',11]],
    'description' => ['presence'=>true],
    'subject' => ['presence'=>true],
    'keywords' => ['presence'=>true]

  ];

  public function get_assigned_to() {
    return User::find($this->get_attribute('assigned_to')->get());
  }

  public function get_submitted_by() {
    return User::find($this->get_attribute('submitted_by')->get());
  }

}
