<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Jenssegers\Date\Date;

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
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');

            $table->string('titulo');
            $table->text('contenido');
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
        Schema::table('informacion', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
        });

        Schema::drop('informacion');
    }
}
