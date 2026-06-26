<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    protected $fillable = [

        'category_id',

        'unit_id',

        'code',

        'barcode',

        'name',

        'description',

        'minimum_stock',

        'maximum_stock',

        'purchase_price',

        'average_price',

        'selling_price',

        'is_active',

    ];

    protected $casts = [

        'minimum_stock'=>'decimal:2',

        'maximum_stock'=>'decimal:2',

        'purchase_price'=>'decimal:2',

        'average_price'=>'decimal:2',

        'selling_price'=>'decimal:2',

        'is_active'=>'boolean',

    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function stocks(): HasMany
    {
        return $this->hasMany(WarehouseStock::class);
    }
}