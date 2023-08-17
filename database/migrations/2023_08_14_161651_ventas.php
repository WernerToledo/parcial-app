<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_autos');
            $table->unsignedBigInteger('id_clientes');
            $table->timestamp('fecha_venta')->useCurrent();
            $table->char('tipo_pago');
            $table->timestamps();

            $table->foreign('id_autos')->references('id')->on('autos');
            $table->foreign('id_clientes')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
