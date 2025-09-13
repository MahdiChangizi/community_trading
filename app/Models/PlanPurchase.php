<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanPurchase extends Model
{
    protected $fillable = [
        'user_id',
        'plan_id',
        'amount_usdt',
        'paid_usdt',
        'chain',
        'pay_wallet_address',
        'tx_hash',
        'confirmations',
        'status',
        'purchased_at',
    ];

    protected $casts = [
        'purchased_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    public function rebateSchedules()
    {
        return $this->hasMany(RebateSchedule::class, 'purchase_id');
    }

    public function referralCommissions()
    {
        return $this->hasMany(ReferralCommission::class, 'source_purchase_id');
    }
}
