<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\requestForm;
use App\Models\Usersprojects;
use Illuminate\Http\Request;

class requestInfo extends Controller
{
    public function show($name){

        $response = requestForm::where('project_name' , $name)->firstOrFail();
        return view('admin.request_info' , compact('response'));

    }

    public function accept($name){
        Projects::where('name' , $name)->update(["project_status" => 'accept']);
        Usersprojects::where('name' , $name)->update(["project_status" => 'accept']);

        return redirect()->back();
    }

    public function decline($name){
        Projects::where('name' , $name)->update(["project_status" => 'decline']);
        Usersprojects::where('name' , $name)->update(["project_status" => 'decline']);

        return redirect()->back();
    }
}
