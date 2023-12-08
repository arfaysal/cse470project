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
        Schema::create('scholerships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('university_id');
            $table->string('criteria');
            $table->string('award');
            $table->string('requirements');
            $table->date('deadline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholerships');
    }
};
