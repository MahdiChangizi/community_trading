<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    protected $fillable = [
        'name','description','price_usdt','duration_months','active'
    ];

    public function purchases()
    {
        return $this->hasMany(PlanPurchase::class);
    }

    public function referralTiers()
    {
        return $this->hasMany(ReferralTier::class);
    }
}
