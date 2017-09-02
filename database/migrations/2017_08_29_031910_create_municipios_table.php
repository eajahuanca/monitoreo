<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provincia_id')->unsigned();
            $table->string('mun_nombre',250)->unique();
            $table->boolean('mun_estado')->default(true);
            $table->integer('user_registra')->unsigned();
            $table->integer('user_actualiza')->unsigned();
            $table->timestamps();

            $table->foreign('provincia_id')->references('id')->on('provincias');
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
        Schema::drop('municipios');
    }
}
