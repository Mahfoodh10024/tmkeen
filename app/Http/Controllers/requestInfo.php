<?php

namespace App\Http\Controllers;

use App\Models\requestForm;
use Illuminate\Http\Request;

class requestInfo extends Controller
{
    public function show($name){

        $response = requestForm::where('project_name' , $name)->firstOrFail();
        return view('admin.request_info' , compact('response'));


    }
}
