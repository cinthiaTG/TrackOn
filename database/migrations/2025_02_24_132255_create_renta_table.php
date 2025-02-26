<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
{
    Schema::create('rentas', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('vehiculo_id');
        $table->date('fecha_inicio'); 
        $table->date('fecha_fin'); 
        $table->enum('estado', ['pendiente', 'confirmada', 'cancelada', 'finalizada'])->default('pendiente');
        $table->enum('metodo_pago', ['tarjeta', 'efectivo', 'transferencia'])->default('tarjeta');
        $table->decimal('total', 10, 2)->default(0.00);
        $table->decimal('deposito', 10, 2)->default(0.00);
        $table->timestamps();

        //claves foráneas
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('vehiculo_id')->references('id')->on('vehiculo')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentas');
    }
};
