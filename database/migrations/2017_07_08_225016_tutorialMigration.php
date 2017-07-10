<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TutorialMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tutoriales',function(Blueprint $table)
        {
            $table->increments('id');
            
            $table->integer('usuario_id')->unsigned()->index();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');

            $table->string('titulo');
            $table->text('link');
            $table->text('imagen');
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
        Schema::table('tutoriales', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
        });

        Schema::drop('tutoriales');
    }
}
