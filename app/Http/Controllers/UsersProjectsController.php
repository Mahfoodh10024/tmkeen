<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Auth;
use Illuminate\Http\Request;
use App\Models\Usersprojects;
use App\Models\User;


class UsersprojectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('questions');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userProjects = new usersprojects();
        $projects = new Projects();
        

        $userProjects->name = $request->name;
        $userProjects->type = $request->type;
        $userProjects->budget = $request->budget;
        $userProjects->description = $request->description;
        $userProjects->paid = 'none';
        $userProjects->project_status = 'reviewing';
        $userProjects->project_period = 'none';
        $userProjects->tools = 'none';
        $userProjects->executer = 'none';
        $userProjects->user_id = Auth::id();

        
        $projects->name = $request->name;
        $projects->type = $request->type;
        $projects->budget = $request->budget;
        $projects->description = $request->description;
        $projects->paid = 'none';
        $projects->project_status = 'reviewing';
        $projects->project_period = 'none';
        $projects->tools = 'none';
        $projects->executer = 'none';
        $projects->user_id = Auth::id();


        $userProjects->save();
        $projects->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('main',compact('user_projects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
