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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome',45);
            $table->string('apelido',50);
            $table->string('Especialização',45);
            $table->string('link_facebook', 200);
            $table->string('link_instagram', 200);
            $table->string('link_email', 200);
            $table->string('img');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
