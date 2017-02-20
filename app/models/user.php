<?php

class User extends \Chronicle\Base {

  public static $table_name = 'users';

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max', 255]],
    'email' => ['presence'=>true, 'length'=>['max', 255], 'format'=>true, 'uniqueness'=>true],
    'password' => ['validates_with' => 'password_for_new_record'],
    'password_digest' => ['presence'=>true, 'length'=>['max', 255]],
    'personnel_id' => ['length'=>['max',11], 'uniqueness'=>true],
    'role' => ['length'=>['max',255],],
  ];

  public static function new($attrs=[]) {
    $record = parent::new();
    $record->add_attribute('password');
    $record->assign_attributes($attrs);
    return $record;
  }

  public function before_validation() {
    if ($this->password !== null) {
      $this->password_digest = $this->hash_password($this->password);
    }
  }

  public function hash_password($password) {
    return password_hash($password, PASSWORD_DEFAULT);
  }

  public function authenticate($password) {
    $authed = password_verify($password, $this->password_digest);
    return $authed ? $this : false;
  }


  public function personnel() {
    return Personnel::find_by(['id' => $this->personnel_id]);
  }

  public function password_for_new_record($attribute) {
    if (isset($this->password_digest) && mb_strlen($attribute->get(),'utf8')<5 ) {
      $this->errors()->add($attribute, 'is too short');
    }
  }



}
