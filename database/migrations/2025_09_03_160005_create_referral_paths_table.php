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
        Schema::create('referral_paths', function (Blueprint $table) {
            $table->foreignId('ancestor_id')->constrained('users');
            $table->foreignId('descendant_id')->constrained('users');
            $table->tinyInteger('level');
            $table->primary(['ancestor_id', 'descendant_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_paths');
    }
};
