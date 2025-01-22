<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;
use Illuminate\Support\Facades\Auth;

class addcomment extends Controller
{
    public function store(Request $request , $name){
        {
            $comment = new comments();
    
            $comment->content = $request->content;
            $comment->projects_id = $name;
            // $comment->user_project_id = '14';
            $comment->user = Auth::id();
            $comment->save();
    
            return redirect()->back();
    
        }
    }
}
