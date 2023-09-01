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
        Schema::create('proponentes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome", 128)->nullable(false);
            $table->string("email", 255);
            $table->string("telefone", 20);
            $table->string("endereco", 255);
            $table->string("cpf", 15)->nullable(false);
            $table->string("qualificacao", 45);
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proponentes');
    }
};
