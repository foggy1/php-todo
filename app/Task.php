<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
  public function list()
  {
      return $this->belongsTo('App\List')
  }
}
