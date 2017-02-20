<?php

class Branch extends \Chronicle\Base {

  public static $table_name = 'branches';

  public static $validations = [
    'name' => ['presence'=>true,'length'=>['max',255]],

  ];

}
