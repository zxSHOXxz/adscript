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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visitor_id');
            $table->foreign('visitor_id')->on('visitors')->references('id')->cascadeOnDelete();
            $table->foreignId('oquestion_id');
            $table->foreign('oquestion_id')->on('oquestions')->references('id')->cascadeOnDelete();
            $table->foreignId('iquestion_id');
            $table->foreign('iquestion_id')->on('iquestions')->references('id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
