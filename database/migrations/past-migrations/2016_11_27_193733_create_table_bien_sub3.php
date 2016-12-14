<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBienSub3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bien_sub3', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('fecha');
            $table->string('folio_aprobado');
            $table->string('folio_compra');
            $table->string('clave');
            $table->string('tipo_adqui');
            $table->string('proveedor');

            $table->decimal('subtotal');
            $table->decimal('iva');
            $table->decimal('total');
            $table->string('ent_dias');
            $table->string('ent_lugar');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bien_sub3');
    }
}
