<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  protected $fillable = [
      'idCustomer', 'idProduct',
  ];

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function product(){
    return $this->belongsTo('App\Product');
  }
}
