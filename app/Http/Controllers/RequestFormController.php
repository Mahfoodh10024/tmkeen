<?php

namespace App\Http\Controllers;

use App\Models\acceptStandards;
use App\Models\requestForm;
use App\Models\Usersprojects;
use App\Models\Projects;
use Auth;
use Illuminate\Http\Request;
use Session;


class RequestFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.requests');
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
        // $form = new requestForm();

        // $form->name = $request['name'];
        // $form->user_id_card = $request['user_id_card'];
        // $form->gender = $request['gender'];
        // $form->age = $request['age'];
        // $form->state = $request['state'];
        // $form->city = $request['city'];
        // $form->neighborhood	 = $request['neighborhood'];
        // $form->email = $request['email'];
        // $form->phone = $request['phone'];
        // $form->education = $request['education'];
        // $form->education_place = $request['education_place'];
        // $form->Specialty = $request['Specialty'];
        // $form->work = $request['workplace'];
        // $form->job = $request['job'];
        // $form->project_name = $request['project_name'];
        // $form->current_model = $request['current_model'];
        // $form->workable = $request['workable'];
        // $form->project_summary = $request['project_summary'];
        // $form->obstacles = $request['obstacles'];
        // $form->project_description = $request['project_description'];
        // $form->project_distinction = $request['project_distinction'];
        // $form->evaluation_things = $request['evaluation_things'];
        // $form->is_innovation = $request['is_innovation'];
        // $form->project_support = $request['project_support'];
        // $form->policies = $request['policies'];
        // $form->user_id = Auth::id();
        // $form->save();

        
        // $userProjects = new usersprojects();
        // $projects = new Projects();
        

        // $userProjects->name = $request['project_name'];
        // $userProjects->type = $request['type'];
        // $userProjects->budget = $request['budget'];
        // $userProjects->description = $request['project_summary'];
        // $userProjects->paid = 'none';
        // $userProjects->project_status = 'reviewing';
        // $userProjects->project_period = 'none';
        // $userProjects->tools = 'none';
        // $userProjects->executer = 'none';
        // $userProjects->user_id = Auth::id();

        
        // $projects->name = $request['project_name'];
        // $projects->type = $request['type'];
        // $projects->budget = $request['budget'];
        // $projects->description = $request['project_summary'];
        // $projects->paid = 'none';
        // $projects->project_status = 'reviewing';
        // $projects->project_period = 'none';
        // $projects->tools = 'none';
        // $projects->executer = 'none';
        // $projects->user_id = Auth::id();


        // $userProjects->save();
        // $projects->save();

        // session(['project_name'=>$request['project_name']]);

        // return redirect()->back()->withoutFragment();

        return $request;

    }

    /**
     * Display the specified resource.
     */
    public function show(requestForm $requestForm)
    {

        $request = requestForm::all();
        
        return view('admin.show' , compact('request'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(requestForm $requestForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, requestForm $requestForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(requestForm $requestForm)
    {
        //
    }
}
