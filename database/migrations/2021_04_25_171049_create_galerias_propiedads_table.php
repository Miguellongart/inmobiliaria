<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriasPropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerias_propiedads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('galeria_id');
            $table->unsignedBigInteger('propiedad_id');

            $table->foreign('galeria_id')->references('id')
                ->on('galerias')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('propiedad_id')->references('id')
                ->on('propiedads')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('galerias_propiedads');
    }
}
