<?php

namespace App\Http\Controllers;

use App\Models\user_projects;
use Illuminate\Http\Request;

class Showproject extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $project = user_projects::all()->where('name' , $request->name);
        return view('show_project' , compact('project'));
    }
}
