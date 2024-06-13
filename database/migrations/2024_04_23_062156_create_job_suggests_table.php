<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_suggest', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('jobId');
            $table->foreign('jobId')->references('id')->on('jobs');

            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('msuggest_category');

            $table->text('suggestion');
            $table->boolean('isFollowup')->nullable();
            $table->string('followupBy')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_suggest');
    }
};
