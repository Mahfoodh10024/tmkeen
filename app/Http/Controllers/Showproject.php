<?php

namespace App\Http\Controllers;

use App\Models\Usersprojects;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class Showproject extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $project = usersprojects::all()->where('name' , $request->name);
        return view('rate' , compact('project'));
    }
}
