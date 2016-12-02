<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPlanSub15 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_sub15', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('num_sol');
            $table->string('fecha');
            $table->string('ur');
            $table->string('fun');
            $table->string('pp');
            $table->string('cog');
            $table->string('gasto');
            $table->string('ff');
            $table->string('just');
            $table->double('techo_presup');
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
            $table->double('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_sub15');
    }
}
