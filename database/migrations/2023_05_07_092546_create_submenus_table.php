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
        Schema::create('submenus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->string('name');
            $table->unsignedBigInteger('link_id');
            $table->integer('serial');
            $table->timestamps();
        });
        Schema::table('submenus', function (Blueprint $table) {
            $table->foreign('menu_id', 'submenus_menu_id')->references('id')->on('menus')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('link_id', 'submenus_link_id')->references('id')->on('links')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('submenus');
    }
};
