<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class School extends Model
{
    protected $fillable = [
        'sppg_id',
        'village_id',
        'npsn',
        'name',
        'level',
        'principal',
        'phone',
        'email',
        'address',
        'latitude',
        'longitude',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function sppg(): BelongsTo
    {
        return $this->belongsTo(Sppg::class);
    }

    public function village(): BelongsTo
    {
        return $this->belongsTo(Village::class);
    }
}