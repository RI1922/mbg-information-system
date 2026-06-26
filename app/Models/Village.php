<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Village extends Model
{
    protected $fillable = [
        'district_id',
        'code',
        'name',
    ];

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function schools(): HasMany
    {
        return $this->hasMany(School::class);
    }

    public function sppgs(): HasMany
    {
        return $this->hasMany(Sppg::class);
    }

    public function suppliers(): HasMany
    {
        return $this->hasMany(Supplier::class);
    }

    public function warehouses(): HasMany
    {
        return $this->hasMany(Warehouse::class);
    }
}