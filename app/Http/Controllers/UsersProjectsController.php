<?php

namespace App\Http\Controllers;

use App\Models\users_accounts;
use App\Models\users_projects;
use Illuminate\Http\Request;

class UsersProjectsController extends Controller
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
        $pro = new users_projects();
        $user = users_accounts::findOrFail(1);

        $pro->name = $request->name;
        $pro->type = $request->type;
        $pro->budget = $request->budget;
        $pro->description = $request->description;
        $pro->paid = 'none';
        $pro->project_status = 'reviewing';
        $pro->project_period = 'none';
        $pro->tools = 'none';
        $pro->executer = 'none';
        $pro->user_id = $user['id'];
        $pro->save();

        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(users_projects $user_projects)
    {

        return view('main',compact('user_projects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(users_projects $users_projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, users_projects $users_projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users_projects $users_projects)
    {
        //
    }
}
