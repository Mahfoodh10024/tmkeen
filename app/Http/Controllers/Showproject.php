<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\Usersprojects;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class Showproject extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $project = usersprojects::all()->where('id' , $id);
        $comments = comments::all()->where('projects_id' , $id);
        return view('rate' , compact('project' , 'comments'));
    }
}
