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
        Schema::create('referral_commissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('earner_user_id')->constrained('users');
            $table->foreignId('source_purchase_id')->constrained('plan_purchases');
            $table->tinyInteger('level');
            $table->decimal('base_amount_usdt', 18, 6);
            $table->decimal('percent', 5, 2);
            $table->decimal('amount_usdt', 18, 6);
            $table->enum('status', ['pending','payable','paid','canceled'])->default('pending');
            $table->string('paid_tx_hash')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_commissions');
    }
};
