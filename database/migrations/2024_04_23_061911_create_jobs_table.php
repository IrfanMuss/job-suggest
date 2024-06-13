<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('type');
            $table->foreign('type')->references('id')->on('mjob_type');

            $table->unsignedBigInteger('technician');
            $table->foreign('technician')->references('id')->on('users');

            $table->unsignedBigInteger('foreman');
            $table->foreign('foreman')->references('id')->on('users');

            $table->unsignedBigInteger('service_advisor');
            $table->foreign('service_advisor')->references('id')->on('users');

            $table->dateTime('job_date');
            $table->text('job_desc');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
