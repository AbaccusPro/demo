<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBienSub41 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bien_sub4_1', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('fecha_ent');
            $table->string('folio_compra');
            $table->string('fecha_fact');
            $table->string('folio_fact');
            $table->string('proveedor');
            $table->string('articulo');
            $table->double('cantidad');
            $table->double('precio');
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
        Schema::dropIfExists('bien_sub4_1');
    }
}
