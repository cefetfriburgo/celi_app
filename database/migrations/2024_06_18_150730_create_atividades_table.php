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
            $table->foreignId('realizador_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->text('descricao');
            $table->enum('status', ['Em avaliação', 'Aprovado', 'Recusado', 'Andamento', 'Concluído'])->nullable();
            $table->text('objetivo')->nullable();
            $table->boolean('foco_inclusao')->nullable();
            $table->integer('limite_participantes')->nullable();
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->foreignId('metodologia_id')->nullable()->references('id')->on('metodologias')->onDelete('cascade');
            $table->foreignId('publico_alvo_id')->nullable()->references('id')->on('publico_alvos')->onDelete('cascade');
            $table->foreignId('endereco_id')->nullable()->references('id')->on('enderecos')->onDelete('cascade');
            $table->foreignId('categoria_id')->nullable()->references('id')->on('categorias')->onDelete('cascade');
            $table->foreignId('area_tematica_id')->nullable()->references('id')->on('area_tematicas')->onDelete('cascade');
            $table->foreignId('linha_extensao_id')->nullable()->references('id')->on('linha_extensaos')->onDelete('cascade');
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
