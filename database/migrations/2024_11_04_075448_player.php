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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('player_username')->unique();
            $table->string('password');
            $table->foreignId('room_id')->nullable();
            $table->foreignId('pinjaman_id')->nullable();
            $table->integer('inventory')->nullable();
            $table->json('raw_items')->nullable();
            $table->json('items')->nullable();
            $table->double('revenue')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
