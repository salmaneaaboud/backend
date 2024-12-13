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
        Schema::create('beat_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('beat_id');
            $table->unsignedBigInteger('tag_id');
            $table->primary(['beat_id', 'tag_id']);
    
            $table->foreign('beat_id')->references('id')->on('beats');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beat_tags');
    }
};
