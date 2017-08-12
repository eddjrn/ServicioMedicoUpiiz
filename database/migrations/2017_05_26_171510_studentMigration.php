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
            
            $table->integer('sexo')->default(1);
            $table->integer('documentacion')->default(2);
            $table->text('observaciones')->nullable();
            $table->integer('turno')->default(1);
            
            $table->string('telefono', 15)->nullable();
            $table->string('calle', 50)->nullable();
            $table->string('numExterior', 8)->nullable();
            $table->string('numInterior', 8)->nullable();
            $table->string('colonia', 50)->nullable();
            $table->integer('codigoPostal')->nullable();
            $table->string('localidad', 50)->nullable();
            
            $table->string('curp', 20)->unique();
            $table->date('fechaNacimiento')->default('1995-01-01');
            
            $table->string('tutor', 150)->nullable();
            $table->string('telefonoTutor', 15)->nullable();
            $table->string('celularTutor', 15)->nullable();
            $table->integer('parentescoTutor')->default(1);
            
            $table->string('pregunta',50)->default("sin especificar");
            $table->string('respuesta',50)->default("sin especificar");
            
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
