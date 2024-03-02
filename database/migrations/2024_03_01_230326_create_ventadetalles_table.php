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
        Schema::create('ventadetalles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('venta_cabecera_id')->constrained('ventacabeceras');
            $table->foreignId('producto_id')->constrained('productos');
            $table->unsignedBigInteger('cantidad');
            $table->decimal('total_venta', 10, 2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventadetalles');
    }
};
