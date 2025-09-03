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
        Schema::create('trade_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->date('period_start');
            $table->date('period_end');
            $table->integer('trades');
            $table->integer('wins');
            $table->integer('losses');
            $table->decimal('accuracy_percent', 5, 2);
            $table->decimal('pnl_usdt', 18, 6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trade_stats');
    }
};
