<?php
namespace App\Services;

use App\Models\ReferralPath;
use App\Models\ReferralTier;
use App\Models\ReferralCommission;
use Illuminate\Support\Facades\DB;

class ReferralService
{
    /**
     * @param \App\Models\PlanPurchase $purchase
     */
    public function distributeForPurchase($purchase): void
    {

        $purchaseAmount = (string) $purchase->amount_usdt;
        $planId = $purchase->plan_id;
        $userId = $purchase->user_id;

        $rawTiers = ReferralTier::where(function($q) use ($planId) {
            $q->whereNull('plan_id')->orWhere('plan_id', $planId);
        })->orderBy('level')->get();


        if ($rawTiers->isEmpty()) {
            return;
        }

        $tiersByLevel = $rawTiers->groupBy('level')->map(function($items) use ($planId) {
            $byPlan = $items->firstWhere('plan_id', $planId);
            return $byPlan ?? $items->first();
        });

        $levels = $tiersByLevel->keys()->map(fn($k) => (int)$k)->toArray();

        $paths = ReferralPath::where('descendant_id', $userId)
            ->whereIn('level', $levels)
            ->orderBy('level')
            ->get();

        if ($paths->isEmpty()) return;

        DB::transaction(function() use ($paths, $tiersByLevel, $purchase, $purchaseAmount) {
            foreach ($paths as $path) {
                $level = (int)$path->level;
                if (! isset($tiersByLevel[$level])) continue;
                $tier = $tiersByLevel[$level];

                // محاسبه: amount = purchaseAmount * (percent / 100)
                // از bc* برای دقت بالا استفاده می‌کنیم؛ تقسیم در scale=8، ضرب در scale=6 (db scale)
                $percentStr = (string) $tier->percent;
                $fraction = bcdiv($percentStr, '100', 8); // مثال: '0.10'
                $commissionAmount = bcmul($purchaseAmount, $fraction, 6); // 6 اعشار

                // اگر صفر باشد عبور کن
                if (bccomp($commissionAmount, '0', 6) <= 0) continue;

                // جلوگیری از duplicate
                $exists = ReferralCommission::where('earner_user_id', $path->ancestor_id)
                    ->where('source_purchase_id', $purchase->id)
                    ->exists();

                if ($exists) {
                    continue;
                }

                ReferralCommission::create([
                    'earner_user_id' => $path->ancestor_id,
                    'source_purchase_id' => $purchase->id,
                    'level' => $level,
                    'base_amount_usdt' => $purchaseAmount,
                    'percent' => $tier->percent,
                    'amount_usdt' => $commissionAmount,
                    'status' => 'paid',
                ]);
            }
        });
    }
}
