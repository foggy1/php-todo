<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = ['description', 'status', 'todo_list_id'];

  public function todo_list()
  {
      return $this->belongsTo('App\TodoList');
  }
}
