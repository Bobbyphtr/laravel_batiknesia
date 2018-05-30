<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionproductlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactionproductlists', function (Blueprint $table) {
            $table->integer('transactionId')->unsigned()->index();
            $table->integer('idProduct')->unsigned()->index();
            $table->integer('jumlahProduct');
            $table->timestamps();

            $table->primary(['transactionId','idProduct'],'transactionproductlists_key');
            $table->foreign('transactionId')
                  ->references('transactionId')->on('transactions');
            $table->foreign('idProduct')
                  ->references('idProduct')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactionproductlists');
    }
}
