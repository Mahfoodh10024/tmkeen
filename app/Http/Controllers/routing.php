<?php

namespace App\Http\Controllers;
use App\Models\usersprojects;
use Illuminate\Http\Request;
use App\Models\comments;
use Illuminate\Support\Facades\Redirect;

class routing extends Controller
{
    public function docs(Request $request){
        $project = usersprojects::all()->where('name' , $request->name);
        return view('documents',compact('project'));
    }

    public function rates($id){


        // $comments = comments::where('projects_id' , $id)->get();
        // return view('rate_view' , compact('comments'));

        Redirect()->refresh();

    }


    public function back(Request $request){

        $backs = $request;

        return view('backs' , compact('backs'));

        // return $backs;
    
    }

}
