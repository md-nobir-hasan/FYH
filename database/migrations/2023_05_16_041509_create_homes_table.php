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
        

        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->longText('title_one')->nullable();
            $table->longText('title_one_description')->nullable();
            $table->longText('title_two')->nullable();
            $table->longText('title_two_description')->nullable();
            $table->longText('benefit_title')->nullable();
            $table->longText('benefit_subtitle')->nullable();
            $table->longText('story_title')->nullable();
            $table->longText('story_subtitle')->nullable();
            $table->longText('feature_title')->nullable();
            $table->longText('feature_subtitle')->nullable();
            $table->longText('image_title')->nullable();
            $table->longText('image_subtitle')->nullable();
            $table->longText('lgImage')->nullable();
            $table->longText('service_title')->nullable();
            $table->longText('service_subtitle')->nullable();
            $table->longText('customer_title')->nullable();
            $table->longText('customer_subtitle')->nullable();
            $table->longText('share_title')->nullable();
            $table->longText('share_subtitle')->nullable();
            $table->longText('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
