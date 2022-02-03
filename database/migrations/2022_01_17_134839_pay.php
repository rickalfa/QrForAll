<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('pay', function(Blueprint $table){

            $table->id();
            $table->string('name_title');
            $table->string('dates_business');
            $table->string('currency');

            $table->string('payment_method');
            $table->float('amount_pay');
            $table->string('payment_currency');

            $table->unsignedBigInteger('id_user_payments')->unique();

              /**
             * restriccion de llave foreana el campo debe de contener un id existente en la tabla users
             */

            $table->foreign('id_user_payments')->references('id')->on('user_payments')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::dropIfExists('pay');
    }
}
