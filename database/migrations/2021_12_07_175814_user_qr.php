<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserQr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_qr', function (Blueprint $table) {
            $table->engine = "InnoDB";

           $table->bigIncrements('id');
           $table->string('url_qr')->unique();
           $table->text('content');
           $table->string('tags');
           $table->bigInteger('category_type_id')->unsigned();
           $table->bigInteger('owner_user_id')->unsigned();

           $table->date('date_create');

           $table->timestamps();

           $table->foreign('owner_user_id')->references('id')->on('users')->onDelete("cascade");

           
     
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
    }
}
