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
        Schema::create('review_types', function (Blueprint $table) {
            $table->unsignedBigInteger('review_id');
            $table->unsignedBigInteger('trainer_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('review_id')->refernces('id')->on('reviews')->cascadeOnDelete();
            $table->foreign('product_id')->refernces('id')->on('products')->cascadeOnDelete();
            $table->foreign('trainer_id')->refernces('id')->on('users')->cascadeOnDelete();
            $table->enum('type',['trainer','product']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_types');
    }
};
