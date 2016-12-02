<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanSub15Table extends Migration
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

            $table->text('num_sol');
            $table->text('fecha');
            $table->text('ur');
            $table->text('fun');
            $table->text('pp');
            $table->text('cog');
            $table->text('gasto');
            $table->text('ff');
            $table->text('just');
            $table->decimal('techo_presup');
            $table->decimal('ene');
            $table->decimal('feb');
            $table->decimal('mar');
            $table->decimal('abr');
            $table->decimal('may');
            $table->decimal('jun');
            $table->decimal('jul');
            $table->decimal('ago');
            $table->decimal('sep');
            $table->decimal('oct');
            $table->decimal('nov');
            $table->decimal('dic');
            $table->decimal('total');
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
