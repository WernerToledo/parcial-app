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
            $table->unsignedBigInteger('id_empleados');
            $table->timestamp('fecha_venta')->useCurrent();
            $table->timestamps();

            $table->foreign('id_autos')->references('id')->on('autos');
            $table->foreign('id_clientes')->references('id')->on('clientes');
            $table->foreign('id_empleados')->references('id')->on('empleados');
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
