<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_suggest_reminder', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('reason');
            $table->foreign('reason')->references('id')->on('mreason');

            $table->unsignedBigInteger('jobSuggestId');
            $table->foreign('jobSuggestId')->references('id')->on('job_suggest');

            $table->unsignedBigInteger('followupBy');
            $table->foreign('id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_suggest_reminder');
    }
};
