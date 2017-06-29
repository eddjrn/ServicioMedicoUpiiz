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

            $table->text('presionAlta');
            $table->text('diabetes');
            $table->text('artritis');
            $table->text('asma');
            $table->text('cancer');
            $table->text('epilepsias');
            $table->text('enfCorazon');
            $table->text('sobrePeso');
            $table->text('enfTiroides');
            $table->text('bipolaridad');
            $table->text('esquizofrenia');
            $table->text('depresion');
            
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
