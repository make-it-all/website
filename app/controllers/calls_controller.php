<?php

class CallsController extends ApplicationController {


    public function index() {
      $this->total_records = Call::all()->count();
      $this->offset = (($this->params['page'] ?? 1)-1)*10;
      $this->calls = Call::all()->offset($this->offset)->limit(10)->results();
    }

    public function new() {
      $this->call = Call::new();
    }

    public function create() {
      var_dump($this->call_params());
      $this->call = Call::new($this->call_params());
      if ($this->call->save()) {
        $this->redirect_to('/calls', ['success'=>'call created']);
      } else {
        $this->render('new');
      }
    }

    public function edit() {
      $this->call = Call::find($this->params['id']);
    }

    public function update() {
      $this->call = Call::find($this->params['id']);
      if ($this->call->update($this->call_params())) {
        $this->redirect_to('index', ['success'=>'call updated']);
      } else {
        $this->render('edit');
      }
    }

    public function destroy() {
      $call = Call::find($this->params['id']);
      $call->destroy();
      $this->redirect_to('/calls', ['success'=>'Call deleted']);
    }

    private function call_params() {
      return $this->params->require('call')->permit('description', 'operator_id', 'caller_id');
    }

}
