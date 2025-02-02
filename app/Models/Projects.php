<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'type',
        'budget',
        'description'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }


}
