<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
           Schema::create('sales', function( Blueprint $table){

            $table->id();

            $table->string('name_seller');
            $table->string('name_bussines');
            $table->float('iva');
            $table->string('amount_service_contract');
            $table->unsignedBigInteger('pay_id')->unique();

            $table->foreign('pay_id')->references('id')->on('pay')->onDelete('cascade')->onUpdate('cascade');
            
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

        Schema::dropIfExists('sales');

    }
}
