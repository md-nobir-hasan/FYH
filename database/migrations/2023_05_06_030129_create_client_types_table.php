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
        Schema::create('client_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->longText('des');
            $table->integer('dis')->default(0);
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('pay_duration_id');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
        Schema::table('client_types', function (Blueprint $table) {
            $table->foreign('currency_id', 'client_types_currency_id')->references('id')->on('currencies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pay_duration_id', 'client_types_pay_duration_id')->references('id')->on('payment_durations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by', 'client_types_created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by', 'client_types_updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('deleted_by', 'client_types_deleted_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_types');
    }
};
