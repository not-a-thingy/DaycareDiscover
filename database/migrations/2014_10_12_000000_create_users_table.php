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
        Schema::defaultStringLength(191);

        if(!Schema::hasTable('users')){
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('email')->unique();
                $table ->boolean('role')->default(0);
                $table->string('password');
                $table->string('contact');
                $table->string('address');
                $table->string('image');
                $table->string('app_date')->nullable();
                $table->rememberToken();
                $table->timestamps();
                });
          } 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
