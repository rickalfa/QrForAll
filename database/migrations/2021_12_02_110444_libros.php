<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('libros', function (Blueprint $table) {

            $table->engine="InnoDB";

            $table->bigIncrements('id');
            $table->string('nombre_libro');
            $table->bigInteger('categoria_libro')->unsigned();
            
            $table->timestamps();

            $table->foreign('categoria_libro')->references('id')->on('categorias')->onDelete("cascade");
            

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
