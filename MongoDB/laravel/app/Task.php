<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Task extends Eloquent
{
  
  protected $connection = 'mongodb';

  public static function getById($id){
    return static::where('_id', $id)->first();
  }

  public static function getLatest()
  {
    return static::latest()->get();
  }

}
