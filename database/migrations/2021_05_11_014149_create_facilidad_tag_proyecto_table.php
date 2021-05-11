<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilidadTagProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilidad_tag_proyecto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facilidad_id');
            $table->unsignedBigInteger('proyecto_id');

            $table->foreign('facilidad_id')->references('id')
                ->on('facilidad_tags')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('facilidad_tag_proyecto');
    }
}
