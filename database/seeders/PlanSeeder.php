<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
    [
        'name' => 'ITI Standard Trading Course (STC)',
        'description' => "3-Month Beginner to Pro Trader Course (Standard).
Covers: Crypto, Stocks, Forex, Commodities.
Format: Weekly theory + practicals + assignments.
Goal: Equip you to trade independently using technical, fundamental, and psychological tools.
Bonus: Access to ITI Community resources.",
        'price_usdt' => 100.00,
        'duration_months' => 3,
        'active' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'ITI Pro Trading Course (PTC)',
        'description' => "6-Month Beginner to Pro Trader Course (Pro).
Covers: Crypto, Stocks, Forex, Commodities.
Format: Weekly theory + practicals + assignments.
Includes all structured modules: Fundamentals, Technicals, Risk, Strategy, Fundamental Analysis, Trading Plan.
Bonus: Access to Telegram/Twitter Community + extra study files (PDF/Whitepaper).",
        'price_usdt' => 1000.00,
        'duration_months' => 6,
        'active' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'name' => 'ITI Elite Trading Course (ETC)',
        'description' => "1-Year Full Access (Elite).
Covers: Crypto, Stocks, Forex, Commodities.
Format: Weekly theory + practicals + assignments.
Includes full structured modules + advanced strategies.
Bonus: 24-Hour 1 V 1 Live Trade, live trading webinars, weekly trade breakdowns, market simulations, trading challenges with leaderboards, exclusive community access, downloadable resources (PDF/Whitepaper).",
        'price_usdt' => 5000.00,
        'duration_months' => 12,
        'active' => true,
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);

    }
}
