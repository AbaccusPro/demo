<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaSub3Bienes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bien_sub3_bienes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();


            $table->string('producto');
            $table->string('marca');
            $table->string('medida');
            $table->decimal('precio');
            $table->double('cantidad');
            $table->string('carac');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bien_sub3_bienes');
    }
}
