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
            ['level' => 0, 'percent' => 5.0, 'plan_id' => 1], // Main account base reward
            ['level' => 1, 'percent' => 0.6, 'plan_id' => 1],
            ['level' => 2, 'percent' => 0.5, 'plan_id' => 1],
            ['level' => 3, 'percent' => 0.4, 'plan_id' => 1],
            ['level' => 4, 'percent' => 0.3, 'plan_id' => 1],
            ['level' => 5, 'percent' => 0.2, 'plan_id' => 1],

            ['level' => 0, 'percent' => 5.0, 'plan_id' => 2], // Main account base reward
            ['level' => 1, 'percent' => 0.6, 'plan_id' => 2],
            ['level' => 2, 'percent' => 0.5, 'plan_id' => 2],
            ['level' => 3, 'percent' => 0.4, 'plan_id' => 2],
            ['level' => 4, 'percent' => 0.3, 'plan_id' => 2],
            ['level' => 5, 'percent' => 0.2, 'plan_id' => 2],


            ['level' => 0, 'percent' => 5.0, 'plan_id' => 3], // Main account base reward
            ['level' => 1, 'percent' => 0.6, 'plan_id' => 3],
            ['level' => 2, 'percent' => 0.5, 'plan_id' => 3],
            ['level' => 3, 'percent' => 0.4, 'plan_id' => 3],
            ['level' => 4, 'percent' => 0.3, 'plan_id' => 3],
            ['level' => 5, 'percent' => 0.2, 'plan_id' => 3],

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
