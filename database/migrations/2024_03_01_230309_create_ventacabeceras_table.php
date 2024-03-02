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
        Schema::create('ventacabeceras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('sucursal_id')->constrained('sucursales');
            $table->foreignId('usuario_id')->constrained('users');
            $table->foreignId('doc_sucursal_id')->constrained('docsucursales');
            $table->foreignId('caja_id')->constrained('cajas');
            $table->string('serie');
            $table->string('nro_comprobante');
            $table->string('descripcion');
            $table->decimal('pago_efectivo', 10, 2);
            $table->decimal('pago_tarjeta', 10, 2);
            $table->decimal('pago_transferencia', 10, 2);
            $table->decimal('pago_credito', 10, 2);
            $table->decimal('subtotal', 10, 2);
            $table->decimal('iva',10,2);
            $table->decimal('delivery', 10, 2);
            $table->decimal('total_venta', 10, 2);
            $table->enum('tipo_pago',['efectivo','transferencia','tarjeta','credito'])->default('efectivo');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventacabeceras');
    }
};
