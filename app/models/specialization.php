<?php

class Specialization extends \Chronicle\Base {

  public static $table_name = 'specializations';

  public static $validations = [
    'name' => ['presence'=>true,'length'=>['max',255]],

  ];

}
