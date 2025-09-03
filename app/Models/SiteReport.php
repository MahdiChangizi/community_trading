<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteReport extends Model
{
    protected $fillable = [
        'period_month',
        'reported_profit_percent',
        'source',
        'notes',
    ];

    protected $casts = [
        'period_month' => 'date',
    ];
}
