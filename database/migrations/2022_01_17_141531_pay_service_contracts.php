<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PayServiceContracts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('pay_service_contracts', function(Blueprint $table){

            $table->id();
            $table->string('name_contract');
            $table->unsignedBigInteger('id_pay')->nullable();



            $table->foreign('id_pay')->references('id')->on('pay')->onDelete('restrict');

            
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
        Schema::dropIfExists('pay_service_contracts');
    }
}
