<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCatBienes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_bienes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('cta_cont');
            $table->string('partida');
            $table->string('cve_producto');
            $table->string('descripcion');
            $table->string('cve_linea');
            $table->string('cve_producto');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_bienes');
    }
}

