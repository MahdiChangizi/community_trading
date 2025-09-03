<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalActivitie extends Model
{
    protected $fillable = [
        'title',
        'metric',
        'value',
        'country_code',
        'occurred_at',
    ];

    protected $casts = [
        'occurred_at' => 'datetime',
    ];
}
