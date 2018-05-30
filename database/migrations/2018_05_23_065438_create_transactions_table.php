<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('transactionId')->index();
            $table->integer('idCustomer')->unsigned();
            $table->date('tglWaktuBayar')->nullable();
            $table->decimal('hargaTotal',8,2)->nullable();
            $table->decimal('ongkir',8,2)->nullable();
            $table->string('alamatKirim',50)->nullable();
            $table->string('noTelp',50)->nullable();
            $table->integer('isSuccess')->nullable();
            $table->timestamps();

            $table->foreign('idCustomer')
                  ->references('idCustomer')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
