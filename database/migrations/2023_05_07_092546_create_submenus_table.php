<?php

use App\Models\ClientType;
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
            $table->foreignIdFor(ClientType::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('link_id')->nullable();
            $table->integer('serial');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
        Schema::table('submenus', function (Blueprint $table) {
            $table->foreign('menu_id', 'submenus_menu_id')->references('id')->on('menus')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('link_id', 'submenus_link_id')->references('id')->on('links')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('submenus', function (Blueprint $table) {
            $table->foreign('created_by', 'submenus_created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by', 'submenus_updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('deleted_by', 'submenus_deleted_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
