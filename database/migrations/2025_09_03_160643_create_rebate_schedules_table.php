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
        Schema::create('rebate_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_id')->constrained('plan_purchases');
            $table->tinyInteger('month_index');
            $table->decimal('amount_usdt', 18, 6);
            $table->date('due_date');
            $table->enum('status', ['scheduled','claimable','paid','expired'])->default('scheduled');
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
        Schema::dropIfExists('rebate_schedules');
    }
};
