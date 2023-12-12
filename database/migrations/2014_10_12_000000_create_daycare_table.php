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

        if(!Schema::hasTable('daycare')){
            Schema::create('daycare', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('contact')->unique();
                $table->string('email')->unique();
                $table->string('address');
                $table->string('facilities');
                $table->integer('rating');
                $table->boolean('verify')->default(0);
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
        Schema::dropIfExists('daycare');
    }
};
