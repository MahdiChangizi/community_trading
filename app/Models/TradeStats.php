<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeStats extends Model
{
    protected $fillable = [
        'user_id',
        'period_start',
        'period_end',
        'trades',
        'wins',
        'losses',
        'accuracy_percent',
        'pnl_usdt',
    ];

    protected $casts = [
        'period_start' => 'date',
        'period_end' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
