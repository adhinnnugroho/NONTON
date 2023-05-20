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
        Schema::create('m_account', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('username');
            $table->text('email');
            $table->text('password');
            $table->enum('role', ['user', 'admin', 'super_admin']);
            $table->integer('level')->commend('1 = user, 2 = admin');
            $table->integer('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_account');
    }
};
