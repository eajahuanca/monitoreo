<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('departamento_id')->unsigned();
            $table->string('prov_nombre',250)->unique();
            $table->boolean('prov_estado')->default(true);
            $table->integer('user_registra')->unsigned();
            $table->integer('user_actualiza')->unsigned();
            $table->timestamps();

            $table->foreign('departamento_id')->references('id')->on('departamentos');
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
        Schema::drop('provincias');
    }
}
