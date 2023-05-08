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
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->timestamps();
        });
        Schema::table('features', function (Blueprint $table) {
            $table->foreign('created_by', 'features_created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by', 'features_updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('deleted_by', 'features_deleted_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benefits');
    }
};
