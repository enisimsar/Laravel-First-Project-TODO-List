<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

  public static function getById($id){
    return static::where('id', (integer) $id)->first();
  }

  public static function getLatest()
  {
    return static::latest()->get();
  }

}
