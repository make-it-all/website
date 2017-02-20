<?php

/*
  Solution (Model)
  The solution model is a php represntation of the table named `solutions`.
  See \Chronicle\Base for more infomation.

  @contributers Jack Delancey
*/

class Solution extends ApplicationModel {

  public static $table_name = 'solutions';

  public function get_submitted_by() {
    return User::find($this->get_attribute('submitted_by')->get());
  }

  public static $validations = [
    'provided_by' => ['presence'=>true, 'numericality'=>true, 'length'=>['max',11]],
    'description' => ['presence'=>true],

  ];

}
