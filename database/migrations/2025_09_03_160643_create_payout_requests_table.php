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
        Schema::create('payout_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->enum('type', ['rebate','commission']);
            $table->decimal('amount_usdt', 18, 6);
            $table->enum('destination_chain', ['erc20','trc20']);
            $table->string('destination_address');
            $table->enum('status', ['pending','processing','paid','rejected'])->default('pending');
            $table->string('tx_hash')->nullable();
            $table->timestamp('processed_at')->nullable();
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payout_requests');
    }
};
