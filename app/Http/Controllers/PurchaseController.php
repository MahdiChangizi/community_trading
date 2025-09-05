<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\PlanPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function store(Request $request, Plan $plan)
    {
        $data = $request->validate([
            'chain' => 'required|in:erc20,trc20',
            'pay_wallet_address' => 'required|string|max:255',
            "tx_hash" => 'nullable|string|min:10|max:200|unique:plan_purchases,tx_hash',
        ]);
        $purchase = PlanPurchase::create([
            'user_id' => Auth::id(),
            'tx_hash' => $data['tx_hash'],
            'plan_id' => $plan->id,
            'amount_usdt' => $plan->price_usdt,
            'chain' => $data['chain'],
            'pay_wallet_address' => $data['pay_wallet_address'],
            'status' => 'confirmed',
        ]);

        return redirect()->back()->with('message', 'Plan bought confirmed successfully.');
    }

    public function show(PlanPurchase $purchase)
    {
        $data = $purchase->load('plan');
        dd($data);
        // $this->authorize('view', $purchase);
        // return view('purchases.show', compact('purchase'));
    }

    public function submitTx(Request $request, PlanPurchase $purchase)
    {
        $this->authorize('update', $purchase);

        $data = $request->validate([
            'tx_hash' => 'required|string|min:10|max:200|unique:plan_purchases,tx_hash',
        ]);

        $purchase->update([
            'tx_hash' => $data['tx_hash'],
            'status' => 'pending', // هنوز نیاز به تایید
        ]);

        return back();
    }

    // ادمین تایید می‌کنه
    public function confirm(Request $request, PlanPurchase $purchase)
    {
        $this->authorize('admin-action');

        $purchase->update([
            'status' => 'confirmed',
            'paid_usdt' => $purchase->amount_usdt,
            'purchased_at' => now(),
            'confirmations' => 12
        ]);

        return back();
    }
}
