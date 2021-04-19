<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->uniqid();
            $table->string('titulo')->uniqid();
            $table->string('slug')->uniqid();
            $table->text('descripcion');
            $table->integer('n_habitacion')->default(0);
            $table->integer('n_bano')->default(0);
            $table->integer('n_estacionamiento')->default(0);
            $table->string('antiguedad')->nullable();
            $table->string('t_vista');
            $table->string('imagen_p')->nullable();
            $table->string('video')->nullable();
            $table->string('nota')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('t_propiedad_id');
            $table->unsignedBigInteger('t_operacion_id');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');            
            $table->foreign('t_propiedad_id')->references('id')->on('tipo_propiedads')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('t_operacion_id')->references('id')->on('tipo_operacions')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('propiedads');
    }
}
