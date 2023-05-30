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
            $table->bigInteger('creator');
            $table->string('title');
            $table->text('description');
            $table->string('file_path')->nullable();
            $table->enum('priority',['high','medium','low'])->default('low');
            $table->tinyInteger('status')->comment('0:open , 1:replied , 2:closed');
            $table->bigInteger('agent');
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
