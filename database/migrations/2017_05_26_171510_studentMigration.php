<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('usuario_id')->unsigned()->index();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');
            
            $table->integer('carrera_id')->unsigned()->index()->nullable();
            $table->foreign('carrera_id')->references('id')->on('carrera')->onDelete('set null');
            
            $table->integer('municipio_id')->unsigned()->index()->nullable();
            $table->foreign('municipio_id')->references('id')->on('municipio')->onDelete('set null');
            
            $table->integer('estado_id')->unsigned()->index()->nullable();
            $table->foreign('estado_id')->references('id')->on('estado')->onDelete('set null');
            
            $table->string('noSeguro')->unique();
            $table->integer('sexo');
            $table->string('telefono');
            $table->string('calle');
            $table->integer('numExt');
            $table->integer('numInt');
            $table->string('colonia');
            $table->integer('cp');
            $table->string('localidad');
            
            $table->string('curp');
            $table->date('nacimiento');
            $table->integer('provedorSeguro');
            $table->integer('noClinica');
            $table->string('tutor');
            
            $table->integer('estatus_id')->unsigned()->index()->nullable();
            $table->foreign('estatus_id')->references('id')->on('estatus')->onDelete('set null');
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
        Schema::table('alumno', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
            $table->dropForeign(['carrera_id']);
            $table->dropForeign(['municipio_id']);
            $table->dropForeign(['estado_id']);
            $table->dropForeign(['estatus_id']);
        });
        
        Schema::drop('alumno');
    }
}
