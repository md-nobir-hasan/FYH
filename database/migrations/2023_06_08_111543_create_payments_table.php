<?php

use App\Models\ClientType;
use App\Models\User;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(ClientType::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('paypal_token');
            $table->string('order_id');
            $table->string('order_status');
            $table->string('pa_email');
            $table->string('pa_id');
            $table->string('pa_status');
            $table->string('pa_fname');
            $table->string('pa_lname');
            $table->string('pa_country_code');
            $table->string('capture_link');
            $table->string('refund_link');
            $table->string('order_link');
            $table->string('amount');
            $table->string('currency');
            $table->string('paypal_fee');
            $table->string('net_amount');
            $table->timestamp('end_time');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
