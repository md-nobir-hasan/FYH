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
            $table->unsignedBigInteger('link_id')->nullable();
            $table->unsignedBigInteger('client_type_id')->nullable();
            $table->integer('serial');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
        Schema::table('menus', function (Blueprint $table) {
            $table->foreign('link_id', 'menus_link_id')->references('id')->on('links')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('client_type_id', 'menus_client_type_id')->references('id')->on('client_types')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('menus', function (Blueprint $table) {
            $table->foreign('created_by', 'menus_created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by', 'menus_updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('deleted_by', 'menus_deleted_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
