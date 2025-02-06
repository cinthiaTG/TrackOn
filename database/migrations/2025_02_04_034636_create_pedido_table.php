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
        Schema::create('pedido', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion_pedido');
            $table->enum('tipo', ['fragil', 'no_importa'])->default('no_importa');
            $table->decimal('precio', 10, 2);
            $table->string('foto')->nullable(); // Ruta de la imagen del pedido
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('transportista_id')->constrained('transportistas')->onDelete('cascade');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
