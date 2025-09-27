<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonthlyReward extends Model
{
    protected $fillable = [
        'user_id',
        'token_amount',
        'usdt_amount',
        'status',
    ];

}
