<?php

class ProblemsController extends ApplicationController {

  public function index() {
    $this->total_records = Problem::all()->count();
    $this->offset = (($this->params['page'] ?? 1)-1)*10;
    $this->problems = Problem::all()->offset($this->offset)->limit(10)->results();
  }

  public function new() {
    $this->problem = Problem::new();
  }

  public function create() {
    var_dump($this->problem_params());
    $this->problem = Problem::new($this->problem_params());
    if ($this->problem->save()) {
      $this->redirect_to('index', ['success'=>'problem created']);
    } else {
      $this->render('new');
    }
  }

  public function edit() {
    $this->problem = Problem::find($this->params['id']);
  }

  public function update() {
    $this->problem = Problem::find($this->params['id']);
    if ($this->problem->update($this->problem_params())) {
      $this->redirect_to('index', ['success'=>'problem updated']);
    } else {
      $this->render('edit');
    }
  }

  public function destroy() {
    $problem = Problem::find($this->params['id']);
    $problem->destroy();
    $this->redirect_to('/problems', ['success'=>'Problem deleted']);
  }

  private function problem_params() {
    return $this->params->require('problem')->permit('type', 'description', 'keywords', 'problem_id');
  }

}
