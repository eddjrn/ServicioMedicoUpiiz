<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedicalDataMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosMedicos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('usuario_id')->unsigned()->index();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
            
            $table->string('numSeguro', 25)->unique();
            $table->integer('proveedorSeguro');
            $table->integer('seguro');
            
            $table->integer('clinica_id')->unsigned()->index()->nullable();
            $table->foreign('clinica_id')->references('id')->on('clinica')->onDelete('set null');
            
            $table->integer('institucionSeguro_id')->unsigned()->index()->nullable();
            $table->foreign('institucionSeguro_id')->references('id')->on('institucionSeguro')->onDelete('set null');
            
            $table->integer('tipoSangre');
            
            
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
        Schema::table('datosMedicos', function(Blueprint $table){
            $table->dropForeign(['usuario_id']);
            $table->dropForeign(['institucionSeguro_id']);
        });
    
        Schema::drop('datosMedicos');
    }
}
