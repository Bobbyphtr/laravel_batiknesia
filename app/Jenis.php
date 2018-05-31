<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
  protected $fillable = [
      'namaJenis',
  ];

  public function product(){
    return $this->hasMany('App\Product');
  }
}
