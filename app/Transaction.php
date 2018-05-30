<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  protected $fillable = [
      'idCustomer', 'tglWaktuBayar', 'hargaTotal', 'ongkir', 'alamatKirim', 'noTelp', 'isSuccess',
  ];

  public function user(){
    return $this->belongsTo('App\User');
  }
}
