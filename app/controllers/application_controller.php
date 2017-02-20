<?php

class ApplicationController extends \Controller\Base {

  public $layout = 'application';

  public function before_action($action) {
    session_start();
    if (get_called_class() !== 'SessionsController' && !$this->logged_in()) {
      $this->redirect_to('/login');
    }
    $this->current_user = $this->current_user();
  }

  public function current_user() {
    if (!isset($this->current_user)) {
      $this->current_user = User::find_by(['id' => $_SESSION['user_id'] ?? -1]);
    }
    return $this->current_user;
  }

  public function logged_in() {
    return $this->current_user() !== null;
  }

}
