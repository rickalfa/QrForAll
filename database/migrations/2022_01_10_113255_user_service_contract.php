<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserServiceContract extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_service_contract', function (Blueprint $table){

            $table->id();
            $table->string('name_service');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->date('start_service_contract');
            $table->date('expire_service_contract');
            $table->longText('description');


            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');


        } );

       




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::dropIfExists('user_service_contract');

    }
}
