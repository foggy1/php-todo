<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
  public function todo_list()
  {
      return $this->belongsTo('App\TodoList');
  }
}
