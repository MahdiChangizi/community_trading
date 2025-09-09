<?php

namespace App\Observers;

use App\Models\PlanPurchase;
use App\Services\ReferralService;

class PlanPurchaseObserver
{

    protected $referralService;

    public function __construct(ReferralService $referralService)
    {
        $this->referralService = $referralService;
    }
    /**
     * Handle the PlanPurchase "created" event.
     */
    public function created(PlanPurchase $purchase)
    {
        if ($purchase->status === 'confirmed') {
            $this->referralService->distributeForPurchase($purchase);
        }
    }

    /**
     * Handle the PlanPurchase "updated" event.
     */
    public function updated(PlanPurchase $purchase)
    {
        if ($purchase->isDirty('status') && $purchase->status === 'confirmed') {
            $this->referralService->distributeForPurchase($purchase);
        }
    }

    /**
     * Handle the PlanPurchase "deleted" event.
     */
    public function deleted(PlanPurchase $planPurchase): void
    {
        //
    }

    /**
     * Handle the PlanPurchase "restored" event.
     */
    public function restored(PlanPurchase $planPurchase): void
    {
        //
    }

    /**
     * Handle the PlanPurchase "force deleted" event.
     */
    public function forceDeleted(PlanPurchase $planPurchase): void
    {
        //
    }
}
