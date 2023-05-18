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
        Schema::create('categoris', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoris');
    }
};
// $table->id();
// $table->uuid('uuid')->nullable();
// $table->foreignId('user_id');
// $table->string('title');
// $table->text('message');
// $table->enum('priority',['high','medium','low'])->default('low');
// $table->enum('status',['open','closed'])->default('open');
// $table->foreignId('assigned_to');
// $table->timestamps();