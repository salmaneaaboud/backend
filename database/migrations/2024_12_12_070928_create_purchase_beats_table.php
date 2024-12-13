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
        Schema::create('purchase_beats', function (Blueprint $table) {
            $table->unsignedBigInteger('purchase_id');
            $table->unsignedBigInteger('beat_id');
            $table->decimal('price', 10, 2);
            $table->enum('license', ['basic', 'premium', 'exclusive']);
            $table->primary(['purchase_id', 'beat_id']);
    
            $table->foreign('purchase_id')->references('id')->on('purchases');
            $table->foreign('beat_id')->references('id')->on('beats');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_beats');
    }
};
