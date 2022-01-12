<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id('compraId');
            $table->timestamps();
            //$table->foreignId('cliente_id')->constrained();
            //$table->foreign('clienteId')->references('clienteID')->on('cliente');
            //$table->foreignId('boleto_id')->constrained();
            //$table->foreign('numBoleto')->references('numBoleto')->on('boleto');
            $table->boolean('pagado');
            $table->date('fechaHora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
