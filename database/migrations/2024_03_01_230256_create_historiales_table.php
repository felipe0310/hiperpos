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
        Schema::create('historiales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained('productos');
            $table->foreignId('usuario_id')->constrained('users');
            $table->foreignId('sucursal_id')->constrained('sucursales');
            $table->string('motivo');
            $table->string('tipo');
            $table->integer('estado');
            $table->unsignedBigInteger('stock_antiguo');
            $table->unsignedBigInteger('stock_nuevo');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiales');
    }
};
