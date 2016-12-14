<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaBienSub2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bien_sub2', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('clave');
            $table->string('fecha');
            $table->string('folio');
            $table->string('ur');
            $table->string('fun');
            $table->string('pp');
            $table->string('cog');
            $table->string('gasto');
            $table->string('ff');
            $table->decimal('imp_comp');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bien_sub2');
    }
}
