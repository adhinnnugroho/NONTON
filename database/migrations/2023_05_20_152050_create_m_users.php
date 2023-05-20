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
        Schema::create('m_users', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('name')->nullable();
            $table->text('email');
            $table->string('wa')->nullable();
            $table->enum('gender', ['L', 'P'])->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_users');
    }
};
