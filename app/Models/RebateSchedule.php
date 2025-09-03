<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RebateSchedule extends Model
{
    protected $fillable = [
        'purchase_id',
        'month_index',
        'amount_usdt',
        'due_date',
        'status',
        'paid_tx_hash',
        'paid_at',
    ];

    protected $casts = [
        'due_date' => 'date',
        'paid_at' => 'datetime',
    ];

    public function purchase()
    {
        return $this->belongsTo(PlanPurchase::class);
    }
}
