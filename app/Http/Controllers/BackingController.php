<?php

namespace App\Http\Controllers;

use App\Models\backing;
use App\Models\Projects;
use App\Models\Usersprojects;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return view('backs' , compact('request'));

        return $request;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $project = new Projects();
        // $user = new Usersprojects();
        $backings = new backing();

        $backings->backer_id = Auth::id();
        $backings->backer_name = Auth::user()->name;
        $backings->projects_id = $request['project_id'];
        $backings->backing_type	= $request['support-type'];
        $backings->backing_amount = $request['amount'];
        $backings->backing_description = $request['description'];
        $backings->project_owner = $request['project_owner'];

        $backings->save();

        // if($status == 1){
        //     session()->flash('success' , 'done');
            
        //     return route('bee');
        // } else{
        //     return redirect()->withErrors('fail' , 'somthing went wrong');
        // }

        return "done";
    }

    /**
     * Display the specified resource.
     */
    public function show(backing $backing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(backing $backing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, backing $backing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(backing $backing)
    {
        //
    }
}
