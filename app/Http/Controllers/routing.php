<?php

namespace App\Http\Controllers;
use App\Models\usersprojects;
use Illuminate\Http\Request;

class routing extends Controller
{
    public function docs(Request $request){
        $project = usersprojects::all()->where('name' , $request->name);
        return view('documents',compact('project'));
    }
}
