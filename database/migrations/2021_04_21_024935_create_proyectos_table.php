<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->uniqid();
            $table->string('nombre')->uniqid();
            $table->string('nombre_en')->uniqid();
            $table->string('slug')->uniqid();
            $table->string('slug_en')->uniqid();
            $table->text('descripcion');
            $table->text('descripcion_en');
            $table->integer('n_habitacion')->default(0);
            $table->integer('n_bano')->default(0);
            $table->integer('n_estacionamiento')->default(0);
            $table->string('antiguedad')->nullable();
            $table->string('t_vista');
            $table->string('t_vista_en');
            $table->string('imagen_p')->nullable();
            $table->string('area_construccion')->nullable();
            $table->string('total_terreno')->nullable();
            $table->enum('estatus', ['PUBLICADO', 'BORRADOR'])->default('BORRADOR');
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
        Schema::dropIfExists('proyectos');
    }
}
