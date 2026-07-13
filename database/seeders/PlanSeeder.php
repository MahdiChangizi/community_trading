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
                'name' => 'Starter Package',
                'description' => 'Investment: $50 | Daily Profit: $1.5 | Total Profit After 180 Days: $270 | Capital Released After 180 Days.',
                'price_usdt' => 50.00,
                'duration_months' => 6,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bronze Package',
                'description' => 'Investment: $100 | Daily Profit: $3 | Total Profit After 180 Days: $540 | Capital Released After 180 Days.',
                'price_usdt' => 100.00,
                'duration_months' => 6,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Silver Package',
                'description' => 'Investment: $300 | Daily Profit: $10 | Total Profit After 180 Days: $1800 | Capital Released After 180 Days.',
                'price_usdt' => 300.00,
                'duration_months' => 6,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gold Package',
                'description' => 'Investment: $800 | Daily Profit: $32 | Bonus: Unlock by referring 15 users (each must activate min $100 package) | Referral Bonus: Level 1: 5%, Level 2: 3%, Level 3: 1% | Total Profit After 180 Days: $5760 | Capital Released After 180 Days.',
                'price_usdt' => 800.00,
                'duration_months' => 6,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}