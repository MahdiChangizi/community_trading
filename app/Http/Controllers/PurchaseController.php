<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\PlanPurchase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\ReferralService;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    protected $referralService;

    public function __construct(ReferralService $referralService)
    {
        $this->referralService = $referralService;
    }

    public function store(Request $request, Plan $plan)
    {
        $data = $request->validate([
            'chain' => 'required|in:bep20',
            'pay_wallet_address' => 'required|string|max:255',
            "tx_hash" => 'nullable|string|min:10|max:200|unique:plan_purchases,tx_hash',
        ]);

        $user_id = Auth::id();

        try {
            DB::beginTransaction();

            $user = User::where('id', $user_id)->first();
            if(!$user->wallet()->first()) {
                $user->wallet()->updateOrCreate([], [
                    'wallet_address' => $data['pay_wallet_address'],
                    'balance' => 0
                ]);
            }


            $purchase = PlanPurchase::create([
                'user_id' => $user_id,
                'tx_hash' => $data['tx_hash'],
                'paid_usdt' => $plan->price_usdt,
                'confirmations' => 12,
                'plan_id' => $plan->id,
                'amount_usdt' => $plan->price_usdt,
                'chain' => $data['chain'],
                'pay_wallet_address' => $data['pay_wallet_address'],
                'status' => 'confirmed',
            ]);

            $user->wallet()->update([
                'balance' => DB::raw('balance + ' . $plan->price_usdt)
            ]);


            $this->referralService->distributeForPurchase($purchase);
            DB::commit();
            return response()->json(['message' => 'Plan bought confirmed successfully.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Failed to process purchase.'], 500);
        }
    }

    // public function show(PlanPurchase $purchase)
    // {
    //     $data = $purchase->load('plan');
    //     dd($data);
    //     // $this->authorize('view', $purchase);
    //     // return view('purchases.show', compact('purchase'));
    // }

    // public function submitTx(Request $request, PlanPurchase $purchase)
    // {
    //     $this->authorize('update', $purchase);

    //     $data = $request->validate([
    //         'tx_hash' => 'required|string|min:10|max:200|unique:plan_purchases,tx_hash',
    //     ]);

    //     $purchase->update([
    //         'tx_hash' => $data['tx_hash'],
    //         'status' => 'pending', // هنوز نیاز به تایید
    //     ]);

    //     return back();
    // }

    // // ادمین تایید می‌کنه
    // public function confirm(Request $request, PlanPurchase $purchase)
    // {
    //     $this->authorize('admin-action');

    //     $purchase->update([
    //         'status' => 'confirmed',
    //         'paid_usdt' => $purchase->amount_usdt,
    //         'purchased_at' => now(),
    //         'confirmations' => 12
    //     ]);

    //     return back();
    // }
}
