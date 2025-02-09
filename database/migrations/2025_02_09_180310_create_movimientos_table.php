<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo_movimiento', ['paquete recibido', 'paquete entregado', 'transferencia', 'recogiendo paquete', 'en camino']);
            $table->unsignedBigInteger('id_origen_pedido'); 
            $table->unsignedBigInteger('id_destino_pedido'); 
            $table->unsignedBigInteger('id_pedido'); 
            $table->foreign('id_origen_pedido')->references('id')->on('pedido')->onDelete('cascade');
            $table->foreign('id_destino_pedido')->references('id')->on('pedido')->onDelete('cascade');
            $table->foreign('id_pedido')->references('id')->on('pedido')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
