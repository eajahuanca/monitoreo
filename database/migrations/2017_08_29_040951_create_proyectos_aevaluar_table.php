<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosAevaluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos_aevaluar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proy_codigo');
            $table->text('proy_hr');
            $table->integer('entidad_id')->unsigned();
            $table->integer('unidad_id')->unsigned();
            $table->string('proy_sigla');
            $table->integer('departamento_id')->unsigned();
            $table->integer('provincia_id')->unsigned();
            $table->text('municipio_id');
            $table->integer('proy_responsable')->unsigned();
            $table->decimal('proy_monto',18,2);
            $table->integer('proy_tiempo');
            $table->text('proy_obs');
            $table->text('proy_archivo');
            $table->boolean('proy_estado')->default(true);
            $table->integer('user_registra')->unsigned();
            $table->integer('user_actualiza')->unsigned();
            $table->timestamps();

            $table->foreign('entidad_id')->references('id')->on('entidades');
            $table->foreign('unidad_id')->references('id')->on('entidad_unidades');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('provincia_id')->references('id')->on('provincias');
            $table->foreign('proy_responsable')->references('id')->on('users');
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
        Schema::drop('proyectos_aevaluar');
    }
}
