<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriaProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_proyecto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('galeria_id');
            $table->unsignedBigInteger('proyecto_id');

            $table->foreign('galeria_id')->references('id')
                ->on('galerias')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('proyecto_id')->references('id')
                ->on('proyectos')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('galeria_proyecto');
    }
}
