<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClinicMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinica', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->string('tipo', 10);
            
            $table->integer('municipio_id')->unsigned()->index()->nullable();
            $table->foreign('municipio_id')->references('id')->on('municipio')->onDelete('set null');
            
            $table->text('mapa')->nullable();
            
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
        Schema::table('clinica', function(Blueprint $table){
            $table->dropForeign(['municipio_id']);
        });
    
        Schema::drop('clinica');
    }
}
