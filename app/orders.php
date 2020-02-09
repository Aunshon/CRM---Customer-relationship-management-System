<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
  protected $fillable = ['actionStatus'];
  function relationUser()
  {
    return $this->hasOne('App\User','id','userId');
  }
}
