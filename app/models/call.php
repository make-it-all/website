<?php

class Call extends \Chronicle\Base {

  public static $table_name = 'calls';

  public function problems() {
    return Problem::where(['call_id'=>$this->id])->results();
  }

}
