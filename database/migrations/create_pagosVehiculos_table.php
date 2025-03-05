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
        Schema::create('pagosVehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vehiculo_id');
            $table->string('accion');
            $table->date('fecha_pago');
            $table->integer('dias');
            $table->decimal('monto', 10, 2);
            $table->decimal('comision', 10, 2)->nullable();
            $table->string('metodo');
            $table->text('descripcion')->nullable();
            $table->enum('estado', ['Pendiente', 'Completado', 'Fallido'])->default('Pendiente');
            
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculo')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagosVehiculos');
    }
};
