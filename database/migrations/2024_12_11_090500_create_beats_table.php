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
            $table->string('title',50);
            $table->string('cover',255)->nullable();
            $table->string('genre',100)->nullable();
            $table->text('description')->nullable();
            $table->integer('bpm')->nullable();
            $table->string('key',50)->nullable();
            $table->string('mp3_file',255);
            $table->string('wav_file',255)->nullable();
            $table->unsignedBigInteger('producer_id');
            $table->timestamp('upload_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('status', ['available', 'unavailable'])->default('available');
            $table->timestamps();

            $table->foreign('producer_id')->references('id')->on('producers');

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
