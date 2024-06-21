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
        Schema::create('formcruds', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('skill')->nullable();
            $table->string('image')->nullable();
            $table->string('country')->nullable()->default('City Name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formcruds');
    }
};
