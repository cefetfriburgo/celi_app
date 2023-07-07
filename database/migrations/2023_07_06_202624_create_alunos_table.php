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
        Schema::create('aluno', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 128)->nullable(false);
            $table->string("email", 255);
            $table->string("telefone", 20);
            $table->string("endereco", 255);
            $table->string("cpf", 15)->nullable(false);
            $table->string("matricula", 30);
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('instrutor', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 128)->nullable(false);
            $table->string("email", 255);
            $table->string("telefone", 20);
            $table->string("endereco", 255);
            $table->string("cpf", 15)->nullable(false);
            $table->string("qualificacao", 45);
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('local', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 128)->nullable(false);
            $table->string("tipo", 15);
            $table->string("localizacao", 15);
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('curso', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 128)->nullable(false);
            $table->string("descricao", 255);
            $table->integer("carga_horaria");
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('turma', function (Blueprint $table) {
            $table->id();
            $table->integer("num_vagas");
            $table->date("data_inicio");
            $table->date("data_fim");
            $table->text("horario");
            $table->unsignedBigInteger("curso_id");
            //setting keys
            $table->foreign('curso_id')->references('id')->on('curso')->onDelete('cascade');
            $table->timestamps();
            
            $table->engine = 'InnoDB';
        });


        Schema::create('instrutor_tem_curso', function (Blueprint $table) {
            $table->bigInteger('instrutor_id')->unsigned();
            $table->bigInteger('curso_id')->unsigned();

            $table->foreign('instrutor_id')
                ->references('id')->on('instrutor')
                ->onDelete('cascade');

            $table->foreign('curso_id')
                ->references('id')->on('curso')
                ->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('turma_tem_local', function (Blueprint $table) {
            $table->bigInteger('turma_id')->unsigned();
            $table->bigInteger('local_id')->unsigned();

            $table->foreign('turma_id')
                ->references('id')->on('turma')
                ->onDelete('cascade');

            $table->foreign('local_id')
                ->references('id')->on('local')
                ->onDelete('cascade');
            
            $table->timestamps();
        });

        Schema::create('turma_tem_aluno', function (Blueprint $table) {
            $table->bigInteger('turma_id')->unsigned();
            $table->bigInteger('aluno_id')->unsigned();
            $table->text('frequencia')->nullable(true);

            $table->foreign('turma_id')
                ->references('id')->on('turma')
                ->onDelete('cascade');

            $table->foreign('aluno_id')
                ->references('id')->on('aluno')
                ->onDelete('cascade');
            
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
