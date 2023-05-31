<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Monitor extends Model
{
    use HasFactory, HasUuids;
    protected $table = "monitors";
    public $primaryKey ='monitorId';

    /**
     * Get the author that wrote the book.
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class,'brandId','brandId');
    }

}
