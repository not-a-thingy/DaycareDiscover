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
        Schema::create('book_visit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('daycare_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('daycare_id')->references('id')->on('daycare');

            $table->string('date');
            $table->string('time');               
            $table->string('status')->default('pending'); // 'pending', 'approved', 'rejected'    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_visit');
    }
};
