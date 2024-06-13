<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mreason', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('mreason_category');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mreason');
    }
};
