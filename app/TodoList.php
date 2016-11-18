<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
  
  // Define params allowed in creation
  protected $fillable = ['title', 'user_id'];

  public function tasks()
  {
      return $this->hasMany('App\Task');
  }

  public function user()
  {
      return $this->belongsTo('App\User');
  }

}
