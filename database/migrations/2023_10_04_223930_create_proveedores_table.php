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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->string("rut",20)->primary();
            $table->string("nombre",20);
            $table->string("direccion_calle",20);
            $table->string("direccion_numero",20);
            $table->string("direccion_comuna",20);
            $table->string("direccion_ciudad",20);
            $table->string("telefono",20)->nullable;
            $table->string("pagina_web",20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
