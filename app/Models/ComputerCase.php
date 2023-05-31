<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class ComputerCase extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'computer_cases';
    protected $fillable = ['brandId','caseName','caseType','caseFanSlot','caseDescription','caseWarranty','casePrice','caseStock','caseImage'];
    public $primaryKey = 'caseId';

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
