<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('red_socials', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('icon');
            $table->string('nombre');
            $table->enum('estatus', ['ACTIVO', 'INACTIVO'])->default('INACTIVO');            
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
        Schema::dropIfExists('red_socials');
    }
}
