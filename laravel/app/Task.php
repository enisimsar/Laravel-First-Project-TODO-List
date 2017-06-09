<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  public function isDone()
  {
    if($this->isdone){
      return true;
    }
    else{
      return false;
    }

  }

  public static function incomplete()
  {
    return static::where('isdone', 0)->get();
  }
}
