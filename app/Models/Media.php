<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'collection',
        'path',
        'url',
        'meta',
    ];

    protected $casts = [
        'meta' => 'array',
    ];
}
