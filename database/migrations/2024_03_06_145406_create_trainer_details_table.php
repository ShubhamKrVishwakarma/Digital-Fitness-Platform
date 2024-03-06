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
        Schema::create('trainer_details', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('occupation', 100);
            $table->string('certificate_id', 50);
            $table->date('issue_date');
            $table->date('expiry_date');
            $table->string('issued_authority', 200);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainer_details');
    }
};
