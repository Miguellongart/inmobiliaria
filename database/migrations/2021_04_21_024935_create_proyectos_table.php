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
            $table->string('titulo')->uniqid();
            $table->string('titulo_en')->uniqid();
            $table->string('slug')->uniqid();
            $table->string('slug_en')->uniqid();
            $table->text('descripcion');
            $table->text('descripcion_en');
            $table->integer('n_habitacion')->default(0);
            $table->integer('n_bano')->default(0);
            $table->integer('n_estacionamiento')->default(0);
            $table->integer('n_agua')->default(0);
            $table->string('antiguedad')->nullable();
            $table->string('t_vista');
            $table->string('t_vista_en');
            $table->string('imagen_p')->nullable();
            $table->string('video')->nullable();
            $table->string('nota')->nullable();
            $table->string('nota_en')->nullable();
            $table->string('area_construccion')->nullable();
            $table->string('total_terreno')->nullable();
            $table->string('estado_propiedad')->nullable();
            $table->string('estado_propiedad_en')->nullable();
            $table->string('precio_BS')->nullable();
            $table->string('precio_PTR')->nullable();
            $table->string('precio_USD')->nullable();
            $table->enum('estatus', ['PUBLICADO', 'BORRADOR'])->default('BORRADOR');
            $table->enum('destacado', ['SI', 'NO'])->default('NO');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('t_propiedad_id');
            $table->unsignedBigInteger('t_operacion_id');

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('t_propiedad_id')->references('id')->on('tipo_propiedads')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('t_operacion_id')->references('id')->on('tipo_operacions')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('pais_id');
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('sector_id');
            $table->foreign('pais_id')->references('id')->on('pais')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('estados')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('municipio_id')->references('id')->on('municipios')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sector_id')->references('id')->on('sectors')->onUpdate('cascade')->onDelete('cascade');

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
