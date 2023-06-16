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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('title');
            $table->text('description');
            $table->string('file_path')->nullable();
            $table->enum('priority',['high','medium','low'])->default('low');
            $table->enum('status',['0:open', '1:replied' , '2:closed'])->default('0:open');
            $table->bigInteger('agent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets_model');
    }
};
