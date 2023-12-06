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
        Schema::create('staff_modalidades', function (Blueprint $table) {
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('modalidade_id');
            $table->primary(['staff_id','modalidade_id']);
            $table->foreign('staff_id')->references('id')->on('staff');
            $table->foreign('modalidade_id')->references('id')->on('modalidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_modalidades');
    }
};
