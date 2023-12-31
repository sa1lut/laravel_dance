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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 15);
            $table->string('surname', 30);
            $table->date('birthday');
            $table->string('telephone', 11);
            $table->unsignedBigInteger('user_id');
            

            $table->index('user_id', 'client_user_idx');

            $table->foreign('user_id', 'client_user_idx_fk')->on('users')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
