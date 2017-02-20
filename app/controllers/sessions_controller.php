<?php

class SessionsController extends ApplicationController {
  public $layout = 'form_layout';

  public function new() {
    // $user = User::new(['name'=>'Henry Morgan', 'email'=>'henry@cd2solutions.co.uk', 'password'=>'pass123', 'is_specialist'=>true]);
    // $user->save();
  }

  public function create() {
    var_dump($this->params);
    $this->email = strtolower($this->params['session']['email']);
    $password = strtolower($this->params['session']['password']);
    $user = User::find_by(['email' => $this->email]);
    if ($user && $user->authenticate($password)) {
      # Log the user in and redirect to the user's show page.
      $_SESSION['user_id'] = $user->id();
      $this->redirect_to('/', ['success'=>"Welcome, $user->name"]);
    } else {
      $this->error = 'Invalid email/password combination';
      $this->render('new');
    }
  }

  public function destroy() {
    $_SESSION['user_id'] = null;
    $this->redirect_to('/');
  }

  public function admin_login() {
    $id = $this->params['id'] ?? User::first()->id();
    $_SESSION['user_id'] = $id;
    $this->redirect_to('/');
  }
}
