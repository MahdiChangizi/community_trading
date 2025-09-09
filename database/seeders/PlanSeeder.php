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
                'name' => 'ITI Standard Trading Course Plan',
                'description' => "6-Month Beginner to Pro Trader Course (Standard).
Covers: Crypto, Stocks, Forex, Commodities.
Format: Weekly theory + practicals + assignments.
Includes full 6-month structured modules (Fundamentals, Technicals, Risk, Strategy, Fundamental Analysis, Trading Plan).
Bonus: Access to Telegram/Twitter Community.",
                'price_usdt' => 100.00,
                'duration_months' => 6,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ITI Elite Trading Course Plan',
                'description' => "6-Month Beginner to Pro Trader Course (Elite).
Covers: Crypto, Stocks, Forex, Commodities.
Format: Weekly theory + practicals + assignments.
Includes full 6-month structured modules (Fundamentals, Technicals, Risk, Strategy, Fundamental Analysis, Trading Plan).
Bonus: Live trading webinars, Weekly trade breakdowns & analysis, Market simulations, Trading challenges with leaderboards, Exclusive community access.",
                'price_usdt' => 1000.00,
                'duration_months' => 6,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }

}
