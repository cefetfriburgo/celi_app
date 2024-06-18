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
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignId('realizador_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('descricao');
            $table->enum('status', ['Em avaliação', 'Aprovado', 'Recusado', 'Andamento', 'Concluído']);
            $table->text('objetivo');
            $table->boolean('foco_inclusao');
            $table->integer('limite_participantes')->nullable();
            $table->foreignId('metodologia_id')->references('id')->on('metodologias')->onDelete('cascade');
            $table->foreignId('publico_alvo_id')->references('id')->on('publico_alvos')->onDelete('cascade');
            $table->foreignId('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');
            $table->foreignId('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreignId('area_tematica_id')->references('id')->on('area_tematicas')->onDelete('cascade');
            $table->foreignId('linha_extensao_id')->references('id')->on('linha_extensaos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividades');
    }
};
