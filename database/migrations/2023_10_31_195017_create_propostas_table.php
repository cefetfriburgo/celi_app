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
        Schema::create('propostas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("tipo_evento", 128);
            $table->string("campus", 128);
            $table->string("titulo", 128);
            $table->unsignedDecimal("carga_horaria", 10, 2);
            $table->string("area_tematica", 128);
            $table->string("linha_extensao", 128);
            $table->string("palavras_chaves", 255);
            $table->string("resumo", 255);
            $table->string("objetivo", 128);
            $table->string("metodologia", 255);
            $table->string("referencias", 255);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propostas');
    }
};
