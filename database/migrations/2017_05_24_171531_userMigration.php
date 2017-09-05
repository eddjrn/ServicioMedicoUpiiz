<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('apellidoPaterno', 50);
            $table->string('apellidoMaterno', 50);
            $table->string('email', 50)->unique();
            $table->text('facebook')->nullable();
            $table->string('password', 60);
            $table->string('identificacion')->unique();
            $table->integer('tipo')->default(1);
            //$table->longText('foto')->nullable();
            $table->binary('foto')->nullable();
            $table->integer('origen')->default(1);
            $table->boolean('completado')->default(false);
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario');
    }
}
