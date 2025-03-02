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
        Schema::create('pagosPedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pedido_id');
            $table->string('accion');//pago, cancelacion...
            $table->date('fecha_pago'); // Fecha del pago
            $table->decimal('monto', 10, 2); // Monto del pago
            $table->decimal('comision', 10, 2)->nullable(); // Comisión del pago (opcional)
            $table->string('metodo'); // Método de pago (Tarjeta, PayPal, etc.)
            $table->text('descripcion')->nullable(); // Descripción adicional del pago
            $table->enum('estado', ['Pendiente', 'Completado', 'Fallido'])->default('Pendiente'); // Estado del pago
            
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pedido_id')->references('id')->on('pedido')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagosPedidos');
    }
};
