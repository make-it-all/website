<?php
//ch
class User extends \Chronicle\Base {

  public static $table_name = 'users';

  public static $validations = [
    'name' => ['presence'=>true, 'length'=>['max', 255]],
    'email' => ['presence'=>true, 'length'=>['max', 255], 'format'=>true, 'uniqueness'=>true],
    'password_digest' => ['presence'=>true, 'length'=>['max', 255]],
    'personnel_id' => ['presence'=>true],
    'password' => ['presence'=>true]
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

  public function roles() {
    if (is_null($this->roles)) {
      $this->roles = [];
      if ($this->is_operator) {
        $roles[] = 'Operator';
      }
      if ($this->is_specialist) {
        $roles[] = 'Specialist';
      }
      if ($this->is_admin) {
        $roles[] = 'Admin';
      }
      if ($this->is_lboro_admin) {
        $roles[] = 'Lboro Admin';
      }
    }
    return $roles;
  }



}
