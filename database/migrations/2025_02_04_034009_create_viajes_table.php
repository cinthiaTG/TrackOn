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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transportista_id')->constrained('transportistas')->onDelete('cascade');
            $table->string('origen', 255);
            $table->string('destino', 255);
            $table->decimal('distancia', 8, 2); // Distancia en kilómetros
            $table->enum('estado', ['pendiente', 'en curso', 'completado', 'cancelado'])->default('pendiente');
            $table->timestamp('fecha_solicitud')->useCurrent();
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_fin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
