<?php

namespace App\Http\Controllers;

use App\Models\backing;
use App\Models\comments;
use App\Models\Projects;
use App\Models\Usersprojects;
use App\Models\requestForm;
use Auth;
use Illuminate\Http\Request;

class ownProjects extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Auth::user()->ownProjects;
        return view('projects' , compact('projects'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = Projects::all()->where('id' , $id);
        // $more = requestForm::where('id' , $id)->get();
        $amount = Projects::find($id)->backs()->sum('backing_amount');
        $backers = Projects::find($id)->user();

        // $backers = backing::
        return view( 'manage_project' , compact('project' ,'amount' , 'backers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
