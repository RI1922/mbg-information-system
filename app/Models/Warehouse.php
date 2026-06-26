<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Warehouse extends Model
{
    protected $fillable = [
        'sppg_id',
        'village_id',
        'code',
        'name',
        'type',
        'capacity',
        'manager',
        'phone',
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

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}