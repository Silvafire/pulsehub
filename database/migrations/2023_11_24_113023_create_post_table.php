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
            $table->string('imagem');
            $table->string('titulo',45);
            $table->string('descricao',45);
            $table->text('informacao');
            $table->unsignedBigInteger('tipo_post_id');
            $table->foreign('tipo_post_id')->references('id')->on('tipo_post');
            $table->softDeletes();
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
