<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Notifications\Notifiable;

class User extends AuthUser implements MustVerifyEmail
{
    use HasFactory, HasUuids;
    public $table = 'users';
    public $primaryKey = 'customerId';
    protected $fillable = ['customerName','customerEmail','customerPhoneNumber','customerPassword','customerVerifyKey','customerVerifyAt'];
    
}
