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
            $table->longText('heading')->nullable();
            $table->longText('subtitle')->nullable();
            $table->longText('opOne')->nullable();
            $table->longText('opTwo')->nullable();
            $table->longText('opThree')->nullable();
            $table->longText('opFour')->nullable();
            $table->longText('opFive')->nullable();
            $table->longText('opSix')->nullable();
            $table->longText('opSeven')->nullable();
            $table->longText('opEight')->nullable();
            $table->longText('opNine')->nullable();
            $table->longText('icon')->nullable();

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
