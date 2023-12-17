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
        Schema::create('lesson_teacher', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('teacher_id');

            $table->index('lesson_id', 'lesson_teacher_lesson_idx');
            $table->index('teacher_id', 'lesson_teacher_teacher_idx');

            $table->foreign('lesson_id', 'lesson_teacher_lesson_idx')->on('lessons')->references('id')->onDelete('cascade');
            $table->foreign('teacher_id', 'lesson_teacher_teacher_idx')->on('teachers')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_teacher');
    }
};
