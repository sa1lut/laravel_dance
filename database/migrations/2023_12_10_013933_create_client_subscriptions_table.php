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
        Schema::create('client_subscriptions', function (Blueprint $table) {
            $table->id();

            $table->date('date_purchase')->useCurrent();
            $table->date('date_end');

            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('subscription_id');

            $table->index('client_id', 'client_subscriptions_client_idx');
            $table->index('subscription_id', 'lesson_teacher_subscription_idx');

            $table->foreign('client_id', 'client_subscriptions_client_idx')->on('clients')->references('id')->onDelete('cascade');
            $table->foreign('subscription_id', 'lesson_teacher_subscription_idx')->on('subscriptions')->references('id')->onDelete('cascade');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_subscriptions');
    }
};
