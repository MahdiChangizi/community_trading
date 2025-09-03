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
        Schema::create('referral_tiers', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('level');
            $table->decimal('percent', 5, 2);
            $table->foreignId('plan_id')->nullable()->constrained('plans');
            $table->unique(['plan_id','level']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_tiers');
    }
};
