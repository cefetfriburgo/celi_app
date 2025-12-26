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
        Schema::table('atividades', function (Blueprint $table) {
            //
	    Schema::table('atividades', function (Blueprint $table) {
            // O método change() altera a coluna existente
            $table->dateTime('data_inicio')->change();
            $table->dateTime('data_termino')->change();
        });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('atividades', function (Blueprint $table) {
            //
	    Schema::table('atividades', function (Blueprint $table) {
            // Caso precise voltar atrás, converte para date novamente
            $table->date('data_inicio')->change();
            $table->date('data_termino')->change();
        });
        });
    }
};
