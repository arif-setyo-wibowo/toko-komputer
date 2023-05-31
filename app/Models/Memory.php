<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Memory extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'memories';
    protected $fillable = ['brandId','memoryName','memoryType','memorySpeed','memoryCapacity','memoryCasLatency','memoryVoltage','memoryWarranty','memoryPrice','memoryStock','memoryImage'];
    public $primaryKey = 'memoryId';

    /**
     * Get the user that owns the Memory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class,'brandId','brandId');
    }

}