<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class ProcessorSocket extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'processor_sockets';
    protected $fillable = ['processorSocketName'];
    public $primaryKey = 'processorSocketId';
}
