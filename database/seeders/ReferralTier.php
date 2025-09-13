<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReferralTier extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiers = [
            // Global tiers (no specific plan)
            ['level' => 1, 'percent' => 10.0, 'plan_id' => 1],
            ['level' => 2, 'percent' => 5.0, 'plan_id' => 1],
            ['level' => 3, 'percent' => 2.5, 'plan_id' => 1],
            ['level' => 4, 'percent' => 2.0, 'plan_id' => 1],
            ['level' => 5, 'percent' => 1.5, 'plan_id' => 1],
            // Specific plan tiers (overrides global for that plan)
            ['level' => 1, 'percent' => 15.0, 'plan_id' => 2], // Plan ID 1
            ['level' => 2, 'percent' => 7.5, 'plan_id' => 2],
            ['level' => 3, 'percent' => 3.0, 'plan_id' => 2],
            ['level' => 4, 'percent' => 2.5, 'plan_id' => 2], // Plan ID 2
            ['level' => 5, 'percent' => 2.0, 'plan_id' => 2],
        ];

        foreach ($tiers as $tier) {
            \App\Models\ReferralTier::updateOrCreate(
                [
                    'level' => $tier['level'],
                    'plan_id' => $tier['plan_id'],
                ],
                [
                    'percent' => $tier['percent'],
                ]
            );
        }
    }
}
