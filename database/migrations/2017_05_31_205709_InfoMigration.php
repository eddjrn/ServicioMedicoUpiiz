<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InfoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('informacion', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned()->index();

            $table->string('titulo');
            $table->text('contenido');
            //$table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
   public function down()
    {        
        Schema::drop('informacion');
    }
}