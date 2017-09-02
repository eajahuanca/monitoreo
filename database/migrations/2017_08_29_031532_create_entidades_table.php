<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ent_nombre',250)->unique();
            $table->string('ent_sigla');
            $table->boolean('ent_estado')->default(true);
            $table->text('ent_obs');
            $table->integer('user_registra')->unsigned();
            $table->integer('user_actualiza')->unsigned();
            $table->timestamps();

            $table->foreign('user_registra')->references('id')->on('users');
            $table->foreign('user_actualiza')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entidades');
    }
}
