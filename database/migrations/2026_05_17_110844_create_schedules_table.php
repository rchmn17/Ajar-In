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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id('schedule_id');
            $table->unsignedBigInteger('user_id');
            $table->date('tanggal');
            $table->enum('jam', [
                '07:00', '08:00', '09:00', '10:00', '11:00', 
                '12:00', '13:00', '14:00', '15:00', '16:00', 
                '17:00', '18:00', '19:00', '20:00', '21:00'
            ]);
            $table->enum('status', ['tersedia', 'tidak tersedia'])->default('tersedia');
            $table->unsignedBigInteger('course_id')->nullable();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade'); 
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};