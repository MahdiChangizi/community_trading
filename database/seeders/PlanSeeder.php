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
            'description' => "3-Month Beginner to Pro Course. Covers: Crypto, Stocks, Forex, Commodities. Weekly theory, practicals, and assignments. Learn technical analysis, risk management, and trading psychology. Build your foundation to trade independently.",
            'price_usdt' => 100.00,
            'duration_months' => 3,
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'ITI Pro Trading Course (PTC)',
            'description' => "6-Month Beginner to Pro Course. Covers: Crypto, Stocks, Forex, Commodities. Weekly theory, practicals, assignments. Includes: Trading Fundamentals, Technical Analysis, Risk Management, Strategy Development, Fundamental Analysis, Complete Trading Plan. Bonus: Telegram/Twitter Community access, study materials (PDF/Whitepaper).",
            'price_usdt' => 1000.00,
            'duration_months' => 6,
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'ITI Elite Trading Course (ETC)',
            'description' => "12-Month Full Access Elite Program. Covers: Crypto, Stocks, Forex, Commodities. Weekly theory, practicals, assignments, advanced strategies. Premium Bonuses: 24-Hour 1-on-1 Live Trading Session, Live Trading Webinars, Weekly Trade Breakdowns, Market Simulations, Trading Challenges with Leaderboards, Exclusive Community Access, Downloadable Resources (PDF/Whitepaper).",
            'price_usdt' => 5000.00,
            'duration_months' => 12,
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
