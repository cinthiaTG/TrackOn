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
            $table->string('estado')->default('pendiente');
            $table->string('descripcion_pedido');
            $table->integer('cantidad');
            $table->string('img_pedido')->nullable()->default('/storage/img/almacen.png'); 
            $table->string('categoria');
            
            // Ubicación de entrega
            $table->string('pais_entrega');
            $table->string('ciudad_entrega');
            $table->string('codigo_postal_entrega');
            $table->text('direccion_entrega');
            
            // Ubicación de envío
            $table->string('pais_envio');
            $table->string('ciudad_envio');
            $table->string('codigo_postal_envio');
            $table->text('direccion_envio');
            $table->decimal('precio', 10, 2);
            
            $table->boolean('aceptar_terminos');
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
