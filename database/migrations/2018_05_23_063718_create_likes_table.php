<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->integer('idCustomer')->unsigned()->index();
            $table->integer('idProduct')->unsigned()->index();
            $table->timestamps();

            $table->primary(['idCustomer','idProduct']);
            $table->foreign('idCustomer')
                  ->references('idCustomer')->on('users');
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
        Schema::dropIfExists('likes');
    }
}
