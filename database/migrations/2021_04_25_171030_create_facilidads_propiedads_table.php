<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilidadsPropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilidads_propiedads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facilidad_id');
            $table->unsignedBigInteger('propiedad_id');

            $table->foreign('facilidad_id')->references('id')
                ->on('facilidad_tags')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('facilidads_propiedads');
    }
}
