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
        Schema::create('certifications', function (Blueprint $table) {
            $table->id('certificate_id');
            $table->unsignedBigInteger('instructor_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->year('year')->nullable();
            $table->string('source')->nullable();
            $table->timestamps();

            // Foreign Key constraint
            $table->foreign('instructor_id')->references('instructor_id')->on('instructors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certifications');
    }
};
