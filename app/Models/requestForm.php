<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requestForm extends Model
{
    use HasFactory;




    public function projects(){
        $this->belongsTo(Projects::class);
    }

    // public function userprojects(){
    //     $this->belongsTo(Usersprojects::class);
    // }
    
}
