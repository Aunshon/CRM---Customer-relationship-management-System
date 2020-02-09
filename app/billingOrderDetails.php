<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billingOrderDetails extends Model
{
  protected $fillable = ['actionStatus'];
  function relationUser()
  {
    return $this->hasOne('App\User','id','userId');
  }
  function relationBill()
  {
    return $this->hasOne('App\orders','id','order_id');
  }
}
