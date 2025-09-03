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
        Schema::create('plan_purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('plan_id')->constrained('plans');
            $table->decimal('amount_usdt', 18, 6);
            $table->decimal('paid_usdt', 18, 6)->default(0);
            $table->enum('chain', ['erc20','trc20'])->nullable();
            $table->string('pay_wallet_address');
            $table->string('tx_hash')->nullable();
            $table->integer('confirmations')->default(0);
            $table->enum('status', ['pending','confirmed','failed','refunded'])->default('pending');
            $table->timestamp('purchased_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_purchases');
    }
};
