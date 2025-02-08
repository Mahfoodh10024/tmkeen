<?php

namespace App\Http\Controllers;

use App\Models\backing;
use App\Models\comments;
use App\Models\Projects;
use App\Models\requestForm;
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
        $project = Projects::all()->where('id' , $id);
        $comments = comments::where('projects_id' , $id)->get();
        $more = requestForm::where('id' , $id)->get();
        $backers = backing::count();
        $amount = backing::where('projects_id' , $id)->sum('backing_amount');
        return view('rate' , compact('project' , 'comments' , 'more' ,'backers','amount'));
    }
}
