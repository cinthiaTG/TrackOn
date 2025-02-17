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
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('estado');
            $table->string('descripcion');
            $table->string('origen_pedido');
            $table->string('destino_pedido');
            $table->string('categoria');
            $table->string('img_pedido')->nullable()->default('/storage/img/almacen.png'); 
            $table->integer('cantidad_productos');
            $table->string('precio');
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
