<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory, HasUuids;
    protected $primaryKey = 'tokenId';
    protected $fillable = ['token', 'email', 'isUsed'];

    public static function requestTokenResetPassword($email)
    {
        $token = Token::create([
            'token' => bin2hex(random_bytes(32)),
            'email' => $email,
            'isUsed' => false
        ]);

        return $token;
    }
}
