<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Storage extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'storages';
    protected $fillable = ['brandId','storageName','storageType','storageSize','storageReadSpeed','storageWriteSpeed','storageRpm','storageDimension','storageWarranty','storagePrice','storageStock','storageImage'];
    public $primaryKey = 'storageId';

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
