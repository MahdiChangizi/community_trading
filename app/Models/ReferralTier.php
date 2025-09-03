<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralTier extends Model
{
    protected $fillable = [
        'level',
        'percent',
        'plan_id',
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
