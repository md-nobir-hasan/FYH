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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('title_description')->nullable();
            $table->string('heading')->nullable();
            $table->text('heading_description')->nullable();
            $table->longText('images')->nullable();
            $table->longText('images_description')->nullable();
            $table->text('youtube')->nullable();
            $table->text('youtube_description')->nullable();
            $table->string('first_image')->nullable();
            $table->text('first_image_story')->nullable();
            $table->string('second_image')->nullable();
            $table->text('second_image_story')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
