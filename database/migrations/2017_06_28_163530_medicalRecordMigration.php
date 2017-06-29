<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedicalRecordMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('historiaMedica', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('usuario_id')->unsigned()->index();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
            
            $table->text('alergias');

            $table->integer('fumar');
            $table->integer('alcohol');
            $table->integer('transfusiones');
            $table->text('cirugias');
            $table->text('fracturas');

            $table->integer('presionAlta');
            $table->integer('diabetes');
            $table->integer('artritis');
            $table->integer('asma');
            $table->integer('cancer');
            $table->integer('epilepsias');
            $table->integer('enfCorazon');
            $table->integer('sobrePeso');
            $table->integer('enfTiroides');
            $table->integer('bipolaridad');
            $table->integer('esquizofrenia');
            $table->integer('depresion');
            
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
       Schema::table('historiaMedica', function(Blueprint $table){
            $table->dropForeign(['usuario_id']);
        });
    
        Schema::drop('historiaMedica');
    }
}
