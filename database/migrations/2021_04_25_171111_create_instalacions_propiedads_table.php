<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstalacionsPropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instalacions_propiedads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instalacion_id');
            $table->unsignedBigInteger('propiedad_id');

            $table->foreign('instalacion_id')->references('id')
                ->on('instalacion_tags')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('instalacions_propiedads');
    }
}
