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
        Schema::create('sacas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_salida');
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')
            ->references('id')
            ->on('usuarios')->onDelete('cascade');

            $table->unsignedBigInteger('ejemplar_id')->nullable();
            $table->foreign('ejemplar_id')
            ->references('id')
            ->on('ejemplars')->onDelete('cascade');
        
          

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sacas');
    }
};
