<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Processor extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'processors';
    public $primaryKey = 'processorId';

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class,'brandId','brandId');
    }

    public function socket(): BelongsTo
    {
        return $this->belongsTo(ProcessorSocket::class,'processorSocketId','processorSocketId');
    }
}
