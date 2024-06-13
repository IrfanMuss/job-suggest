<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('customerId');
            $table->foreign('customerId')->references('id')->on('customer')->cascadeOnDelete();

            $table->string('VIN')->nullable();
            $table->string('police_number');

            $table->unsignedBigInteger('model');
            $table->foreign('model')->references('id')->on('mvehicle_type')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicle');
    }
};
