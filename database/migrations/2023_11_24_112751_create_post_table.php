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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('imagem')->nullable();
            $table->string('titulo',45);
            $table->string('descricao',45);
            $table->text('informacao');
            $table->foreign('id_tipopost')->references('id')->on('tipo_post');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
