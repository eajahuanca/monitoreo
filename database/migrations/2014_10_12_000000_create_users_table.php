<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('us_carnet')->unique();
            $table->string('us_expedido');
            $table->string('us_nombre');
            $table->string('us_paterno');
            $table->string('us_materno');
            $table->date('us_nacimiento');
            $table->string('us_genero');
            $table->integer('us_telefono');
            $table->integer('us_celular');
            $table->string('email')->unique();
            $table->string('us_profesion');
            $table->string('us_cargo');
            $table->string('us_foto');
            $table->integer('us_tipo');
            $table->string('us_cuenta')->unique();
            $table->string('password');
            $table->boolean('us_estado')->default(true);
            $table->text('us_obs');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
