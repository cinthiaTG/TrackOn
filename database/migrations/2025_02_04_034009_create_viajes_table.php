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
            $table->string('fecha_inicio', 255);
            $table->string('fecha_fin', 255);
            $table->integer('cantidad_pedidos');
            $table->decimal('distancia', 8, 2); // Distancia en kilómetros
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
