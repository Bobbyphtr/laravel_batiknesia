<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('idProduct');
            $table->string('namaProduk',30);
            $table->string('dimensi',20)->nullable();
            $table->string('deskripsi',100)->nullable();
            $table->integer('jumlahLike')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('idJenis')->unsigned();
            $table->double('harga',15,2);
            $table->timestamps();

            $table->foreign('idJenis')
                  ->references('idJenis')->on('jenis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
