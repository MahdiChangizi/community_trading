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
                'description' => 'Investment: $10 | Daily Profit: $1.1 | Total Profit After 60 Days: $66 | Capital Released After 60 Days.',
                'price_usdt' => 10.00,
                'duration_months' => 2,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bronze Package',
                'description' => 'Investment: $150 | Daily Profit: $6 | Total Profit After 60 Days: $360 | Capital Released After 60 Days.',
                'price_usdt' => 150.00,
                'duration_months' => 2,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Silver Package',
                'description' => 'Investment: $750 | Daily Profit: $32 | Total Profit After 60 Days: $1920 | Capital Released After 60 Days.',
                'price_usdt' => 750.00,
                'duration_months' => 2,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gold Package',
                'description' => 'Investment: $2100 | Daily Profit: $95 | Total Profit After 60 Days: $5700 | Capital Released After 60 Days.',
                'price_usdt' => 2100.00,
                'duration_months' => 2,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Platinum Package',
                'description' => 'Investment: $5000 | Daily Profit: $220 | Total Profit After 60 Days: $13200 | Capital Released After 60 Days.',
                'price_usdt' => 5000.00,
                'duration_months' => 2,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Diamond Package',
                'description' => 'Investment: $10000 | Daily Profit: $500 | Total Profit After 60 Days: $30000 | Capital Released After 60 Days.',
                'price_usdt' => 10000.00,
                'duration_months' => 2,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

