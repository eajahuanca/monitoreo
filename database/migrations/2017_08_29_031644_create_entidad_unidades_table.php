<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntidadUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidad_unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entidad_id')->unsigned();
            $table->string('uni_nombre',250)->unique();
            $table->boolean('uni_estado')->default(true);
            $table->text('uni_obs');
            $table->integer('user_registra')->unsigned();
            $table->integer('user_actualiza')->unsigned();
            $table->timestamps();

            $table->foreign('entidad_id')->references('id')->on('entidades');            
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
        Schema::drop('entidad_unidades');
    }
}
