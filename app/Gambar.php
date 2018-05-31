<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
  protected $primaryKey = 'idProduct';
  
  protected $fillable = [
      'idProduct', 'gambar',
  ];

  public function product(){
    return $this->belongsTo('App\Product', 'idProduct');
  }
}
