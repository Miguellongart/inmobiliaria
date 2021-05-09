<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdicionalsPropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adicionals_propiedads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adicional_id');
            $table->unsignedBigInteger('propiedad_id');

            $table->foreign('adicional_id')->references('id')
                ->on('adicional_tags')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('adicionals_propiedads');
    }
}
