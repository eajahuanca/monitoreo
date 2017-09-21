<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proy_nombre');
            $table->string('legal_entidad');
            $table->decimal('legal_fmonto',18,2);
            $table->decimal('legal_cmonto',18,2);
            $table->decimal('legal_tmonto',18,2);
            $table->string('legal_archivo');
            $table->boolean('legal_estado')->default(true);
            $table->integer('solicitud_id')->unsigned();
            $table->integer('user_registra')->unsigned();
            $table->integer('user_actualiza')->unsigned();
            $table->timestamps();
            
            $table->foreign('solicitud_id')->references('id')->on('proyectos_aevaluar');
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
        Schema::drop('legales');
    }
}
