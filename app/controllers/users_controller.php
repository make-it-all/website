<?php

class UsersController extends ApplicationController {

  public function index() {
    $this->total_records = User::all()->count();
    $this->offset = (($this->params['page'] ?? 1)-1)*10;
    $this->users = User::all()->offset($this->offset)->limit(10)->results();
  }

  public function new() {
    $this->user = User::new();
  }

  public function create() {
    $this->user = User::new($this->user_params());
    if ($this->user->save()) {
      $this->redirect_to('/', ['success'=>'user created']);
    } else {
      $this->render('new');
    }
  }

  public function edit() {
    $this->user = User::find($this->params['id']);
  }

  public function update() {
    $this->user = User::find($this->params['id']);
    if ($this->user->update($this->user_params())) {
      $this->redirect_to('index', ['success'=>'user updated']);
    } else {
      $this->render('edit');
    }
  }

  public function destroy() {
    $user = User::find($this->params['id']);
    $user->destroy();
    $this->redirect_to('/users', ['success'=>'User deleted']);
  }

  private function user_params() {
    return $this->params->require('user')->permit('name', 'email', 'password', 'personnel_id', 'role');
  }

}
