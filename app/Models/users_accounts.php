<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_accounts extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'phone',
        'city',
        'email',
        'password',
        'policy'
    ];


    protected $hidden = [
        'password',
        'remember_token',
        // 'two_factor_recovery_codes',
        // 'two_factor_secret',
    ];
}
