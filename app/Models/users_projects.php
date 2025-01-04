<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'budget',
        'description'
    ];
}
