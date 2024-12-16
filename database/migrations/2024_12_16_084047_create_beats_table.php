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
        Schema::create('beats', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('cover', 255);
            $table->string('genre', 100);
            $table->integer('bpm');
            $table->string('key', 50);
            $table->string('mp3_file', 255);
            $table->string('wav_file', 255)->nullable();
            $table->foreignId('producer_id')->constrained('producers')->notNullable();
            $table->enum('status', ['available', 'not_available'])->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beats');
    }
};
