<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPresupMod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presup_mod', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->double('ene');
            $table->double('feb');
            $table->double('mar');
            $table->double('abr');
            $table->double('may');
            $table->double('jun');
            $table->double('jul');
            $table->double('ago');
            $table->double('sep');
            $table->double('oct');
            $table->double('nov');
            $table->double('dic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presup_mod');
    }
}
