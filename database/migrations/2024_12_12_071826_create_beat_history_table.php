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
        Schema::create('beat_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beat_id');
            $table->enum('action', ['created', 'edited', 'deleted', 'sold']);
            $table->timestamps();
    
            $table->foreign('beat_id')->references('id')->on('beats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beat_history');
    }
};
