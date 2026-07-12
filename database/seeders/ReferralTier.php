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
    $tiers = [];

    foreach (range(1, 6) as $planId) {
        $tiers[] = [
            'level' => 1,
            'percent' => 5,
            'plan_id' => $planId,
        ];

        $tiers[] = [
            'level' => 2,
            'percent' => 3,
            'plan_id' => $planId,
        ];

        $tiers[] = [
            'level' => 3,
            'percent' => 1,
            'plan_id' => $planId,
        ];
    }

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
