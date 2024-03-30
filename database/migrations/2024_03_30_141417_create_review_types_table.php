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
            $table->unsignedBigInteger('trainer_id');
            $table->unsignedBigInteger('product_id');
            $table->enum('type',['trainer','product']);

            $table->foreign("review_id")->references("id")->on("reviews")->cascadeOnDelete();
            $table->foreign("trainer_id")->references("id")->on("users")->cascadeOnDelete();
            $table->foreign("product_id")->references("id")->on("products")->cascadeOnDelete();
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
