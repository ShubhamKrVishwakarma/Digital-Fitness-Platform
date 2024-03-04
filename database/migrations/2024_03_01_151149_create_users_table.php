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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('phone', 10)->nullable();
            $table->string('password');
            $table->enum('gender', ['M', 'F', 'O']);
            $table->date('dob');
            $table->text('address')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->string('bio', 255)->nullable();
            $table->enum('role', ['member', 'trainer', 'admin'])->default('member');
            $table->float('rating')->nullable();
            $table->integer('followers')->default(0);
            $table->integer('following')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
