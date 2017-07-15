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
            
            $table->text('alergias')->nullable();

            $table->integer('fumar');
            $table->integer('numFumar')->nullable();
            $table->integer('edadFumar')->nullable();
            
            $table->integer('alcohol');
            $table->integer('numAlcohol')->nullable();
            
            $table->integer('transfusiones');
            $table->integer('edadTransfusiones')->nullable();
            
            $table->text('cirugias')->nullable();
            $table->text('fracturas')->nullable();

            $table->integer('presionAlta')->nullable();
            $table->integer('diabetes')->nullable();
            $table->integer('artritis')->nullable();
            $table->integer('asma')->nullable();
            $table->integer('cancer')->nullable();
            $table->integer('epilepsias')->nullable();
            $table->integer('enfCorazon')->nullable();
            $table->integer('sobrePeso')->nullable();
            $table->integer('enfTiroides')->nullable();
            $table->integer('bipolaridad')->nullable();
            $table->integer('esquizofrenia')->nullable();
            $table->integer('depresion')->nullable();
            
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
