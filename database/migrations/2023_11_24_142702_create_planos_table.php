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
        Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->integer('series');
            $table->integer('duracao_total');
            $table->integer('tmp_exercicio');
            $table->integer('repeticoes');
            $table->unsignedBigInteger('modalidade_id'); // Chave estrangeira
            $table->foreign('modalidade_id')->references('id')->on('modalidades');
            $table->unsignedBigInteger('tipo_plano_id'); // Chave estrangeira
            $table->foreign('tipo_plano_id')->references('id')->on('tipo_planos');
            $table->softDeletes(); // Adiciona a coluna deleted_at para soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planos');
    }
};
