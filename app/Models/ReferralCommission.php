<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralCommission extends Model
{
    protected $fillable = [
        'earner_user_id',
        'source_purchase_id',
        'level',
        'base_amount_usdt',
        'percent',
        'amount_usdt',
        'status',
        'paid_tx_hash',
        'paid_at',
    ];

    protected $casts = [
        'paid_at' => 'datetime',
    ];

    public function earner()
    {
        return $this->belongsTo(User::class, 'earner_user_id');
    }

    public function sourcePurchase()
    {
        return $this->belongsTo(PlanPurchase::class, 'source_purchase_id');
    }
}
