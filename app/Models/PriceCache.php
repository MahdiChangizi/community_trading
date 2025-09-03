<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceCache extends Model
{
    protected $table = 'price_cache';
    public $timestamps = false;

    protected $fillable = [
        'symbol',
        'price_usd',
        'rank',
        'updated_at',
    ];

    protected $casts = [
        'updated_at' => 'datetime',
    ];
}
