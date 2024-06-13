<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('full_name')->nullable();
            $table->enum('division', ['General Repair', 'Body Paint']);
            $table->string('password');
            $table->string('image')->nullable();


            $table->unsignedBigInteger('role');
            $table->foreign('role')->references('id')->on('user_role');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
