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
        Schema::create('testvisit', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('time');    
            $table->boolean('is_booked')->default(false);
            $table->string('status')->default('pending'); // 'pending', 'approved', 'rejected'    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testvisit');
    }
};
