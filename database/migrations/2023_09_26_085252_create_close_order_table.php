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
        Schema::create('close_order', function (Blueprint $table) {
            $table->id();
            $table->string('symbols')->nullable();
            $table->integer('open')->nullable();
            $table->integer('high')->nullable();
            $table->integer('low')->nullable();
            $table->integer('profit')->nullable();
            $table->unsignedBigInteger('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('close_order');
    }
};
