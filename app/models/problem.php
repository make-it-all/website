<?php

class Problem extends \Chronicle\Base {

  public static $table_name = 'problems';

  public function call() {
    Call::find_by(['id'=>$this->call_id]);
  }

}
