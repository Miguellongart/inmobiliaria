<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdicionalTagProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adicional_tag_proyecto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adicional_id');
            $table->unsignedBigInteger('proyecto_id');

            $table->foreign('adicional_id')->references('id')
                ->on('adicional_tags')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('adicional_tag_proyecto');
    }
}
