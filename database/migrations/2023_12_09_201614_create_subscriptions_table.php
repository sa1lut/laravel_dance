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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->unsignedDecimal('price', 6)->default(500);
            $table->unsignedBigInteger('period')->default(1);
            $table->unsignedBigInteger('count')->default(10);
            $table->text('description');
            $table->unsignedBigInteger('lesson_id');
            
            $table->index('lesson_id', 'subscriptions_lesson_idx');

            $table->foreign('lesson_id', 'subscriptions_lesson_idx')->on('lessons')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
