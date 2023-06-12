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
            $table->bigIncrements('id_pedido');
            $table->date('fecha_pedido');
            $table->date('fecha_entrega')->nullable();
            $table->string('observaciones')->nullable();
            $table->unsignedBigInteger('id_cliente');
            $table->timestamps();

            $table->foreign('id_cliente')->references('id_cliente')->on('cliente');
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
