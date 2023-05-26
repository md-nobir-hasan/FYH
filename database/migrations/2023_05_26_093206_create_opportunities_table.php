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
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('subtitle')->nullable();
            $table->longText('description')->nullable();
            $table->string('benefit_title')->nullable();
            $table->longText('benefit_subtitle')->nullable();
            $table->string('story_title')->nullable();
            $table->longText('story_subtitle')->nullable();
            $table->string('service_title')->nullable();
            $table->longText('service_subtitle')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opportunities');
    }
};
