<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionProductList extends Model
{
  protected $fillable = [
      'transactionId', 'idProduct', 'jumlahProduct',
  ];

  public function transaction(){
    return $this->belongsTo('App\Transaction');
  }
}
