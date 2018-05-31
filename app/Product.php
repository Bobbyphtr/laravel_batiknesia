<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model

{

  protected $primaryKey = 'idProduct';

  protected $fillable = [
      'namaProduk', 'dimensi', 'deskripsi', 'jumlahLike', 'stock', 'idJenis', 'harga',
  ];

  public function jenis(){
    return $this->hasOne('App\Jenis', 'idJenis');
  }

  public function gambar(){
    return $this->hasMany('App\Gambar', 'idproduct');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }
}
