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
            
            $table->integer('sexo');
            $table->integer('documentacion');
            $table->integer('turno');
            
            $table->string('telefono', 15);
            $table->string('calle', 50);
            $table->string('numExterior', 8);
            $table->string('numInterior', 8);
            $table->string('colonia', 50);
            $table->integer('codigoPostal');
            $table->string('localidad', 50);
            
            $table->string('curp', 20)->unique();
            $table->date('fechaNacimiento');
            
            $table->string('tutor', 150);
            $table->string('telefonoTutor', 15);
            $table->string('celularTutor', 15);
            $table->integer('parentescoTutor');
            
            
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
