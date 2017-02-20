<?php

class Department extends \Chronicle\Base {

  public static $table_name = 'departments';

  public static $validations = [
    'name' => ['presence'=>true,'length'=>['max',255]],

  ];
}
