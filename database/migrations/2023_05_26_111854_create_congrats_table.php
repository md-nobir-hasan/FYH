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
        Schema::create('congrats', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->text('heading')->nullable();
            $table->text('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('opOne')->nullable();
            $table->text('opTwo')->nullable();
            $table->text('opThree')->nullable();
            $table->text('opFour')->nullable();
            $table->text('icon')->nullable();
            $table->text('option_title')->nullable();
            $table->text('button_one')->nullable();
            $table->text('button_two')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('congrats');
    }
};
