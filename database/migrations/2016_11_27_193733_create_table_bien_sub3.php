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
            $table->string('num_sol_apro');
            $table->string('num_sol_compra');
            $table->string('clave');
            $table->string('tipo_adqui');
            $table->string('proveedor');

            $table->string('producto');
            $table->string('medida');
            $table->double('cantidad');
            $table->string('marca');
            $table->double('precio');
            $table->string('carac');

            $table->double('subtotal');
            $table->double('iva');
            $table->double('total');
            $table->string('dias_ent');
            $table->string('lugar_ent');

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
