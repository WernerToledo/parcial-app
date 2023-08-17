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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ventas');;
            $table->string('descripcion');
            $table->string('cantidad');
            $table->string('descuento');
            $table->double('monto_cuota');
            $table->double('pago_cuota');
            $table->double('total_pagar');
            $table->timestamps();

            $table->foreign('id_ventas')->references('id')->on('ventas');
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
