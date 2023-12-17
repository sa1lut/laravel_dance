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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login', 25)->unique();
            $table->string('password', 255);
            $table->unsignedBigInteger('role_id')->default(2);

            $table->index('role_id', 'user_role_idx');
            $table->foreign('role_id', 'user_role_idx_fk')->on('roles')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
