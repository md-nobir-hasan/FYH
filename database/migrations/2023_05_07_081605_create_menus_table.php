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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('link_id');
            $table->unsignedBigInteger('client_type_id')->nullable();
            $table->integer('serial');
            $table->timestamps();
        });
        Schema::table('menus', function (Blueprint $table) {
            $table->foreign('link_id', 'menus_link_id')->references('id')->on('links')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('client_type_id', 'menus_client_type_id')->references('id')->on('client_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
