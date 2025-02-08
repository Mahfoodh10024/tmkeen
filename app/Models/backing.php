<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Guard;

class backing extends Model
{
    use HasFactory;


    // protected $fillable = [
    //     'name',
    //     'type',
    //     'budget',
    //     'description'
    // ];

    // protected $guarded;


    public function project(){
        return $this->belongsTo(Projects::class);
    }

    public function user(){
        return $this->hasMany(Projects::class);
    }
}
