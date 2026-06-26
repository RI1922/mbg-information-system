<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Supplier extends Model
{
    protected $fillable = [

        'village_id',

        'code',

        'name',

        'owner_name',

        'phone',

        'email',

        'address',

        'postal_code',

        'npwp',

        'bank_name',

        'bank_account',

        'bank_holder',

        'notes',

        'is_active',

    ];

    protected $casts = [

        'is_active'=>'boolean',

    ];

    public function village(): BelongsTo
    {
        return $this->belongsTo(Village::class);
    }
}