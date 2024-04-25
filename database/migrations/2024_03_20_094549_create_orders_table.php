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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('phone', 12);
            $table->text('address');
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('zip_code', 12);
            $table->float('amount');
            $table->enum('status',['pending', 'confirmed', 'rejected', 'cancelled']);
            $table->enum('payment_mode',['online', 'offline']);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
