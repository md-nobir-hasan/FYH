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
            $table->string('first_image')->nullable();
            $table->string('fimg_title')->nullable();
            $table->string('fimg_subtitle')->nullable();
            $table->text('fimg_story')->nullable();
            $table->string('second_image')->nullable();
            $table->string('simg_title')->nullable();
            $table->string('simg_subtitle')->nullable();
            $table->text('simg_story')->nullable();
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
