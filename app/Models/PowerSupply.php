<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PowerSupply extends Model
{
    use HasFactory,HasUuids;
    protected $table = 'power_supplies';
    public $primaryKey = 'psuId';

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class,'brandId','brandId');
    }
}
