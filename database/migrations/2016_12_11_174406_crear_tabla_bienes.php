<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaBienes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bien_sub2_bienes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('bien');
            $table->string('medida');
            $table->double('cantidad');
            $table->string('marca');
            $table->decimal('precio');
            $table->string('carac');
            $table->string('just');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bien_sub2_bienes');
    }
}
