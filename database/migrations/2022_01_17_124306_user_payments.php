<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class UserPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('user_payments', function(Blueprint $table){

            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('pay_plataform');
            $table->string('pay_amount');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');




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
        Schema::dropIfExists('user_payments');

    }
}
