<?php

class PersonnelController extends ApplicationController {

  public function index() {
    $this->total_records = Personnel::all()->count();
    $this->offset = (($this->params['page'] ?? 1)-1)*10;
    $this->personnels = Personnel::all()->offset($this->offset)->limit(10)->results();
  }

  public function new() {
    $this->personnel = Personnel::new();
  }

  public function create() {
    var_dump($this->personnel_params());
    $this->personnel = Personnel::new($this->personnel_params());
    if ($this->personnel->save()) {
      $this->redirect_to('index', ['success'=>'personnel created']);
    } else {
      $this->render('new');
    }
  }

  public function edit() {
    $this->personnel = Personnel::find($this->params['id']);
  }

  public function update() {
    $this->personnel = Personnel::find($this->params['id']);
    if ($this->personnel->update($this->personnel_params())) {
      $this->redirect_to('index', ['success'=>'personnel updated']);
    } else {
      $this->render('edit');
    }
  }

  public function destroy() {
    $personnel = Personnel::find($this->params['id']);
    $personnel->destroy();
    $this->redirect_to('/personnel', ['success'=>'Personnel deleted']);
  }

  private function personnel_params() {
    return $this->params->require('personnel')->permit('type', 'description', 'keywords', 'personnel_id');
  }

}
