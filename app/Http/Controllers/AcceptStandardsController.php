<?php

namespace App\Http\Controllers;

use App\Models\acceptStandards;
use Illuminate\Http\Request;

class AcceptStandardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
       
       
       
       return acceptStandards::create([
        
       "project_name" => $request['project_name'],
       "question1" => $request['q1'],
       "question2" => $request['q2'],
       "question3" => $request['q3'],
       "question4" => $request['q4'],
       'question5' => $request['q5'],
       'question6' => $request['q6'],
       'question7' => $request['q7'],
       'question8' => $request['q8'],
       'question9' => $request['q9'],
       'question10' => $request['q10'],
       'question11' => $request['q11'],
       'question12' => $request['q2'],
       'question13' => $request['q13'],
       'question14' => $request['q14'],
       'question15' => $request['q15'],
       'question16' => $request['q16'],
       'question17' => $request['q7'],
       'question18' => $request['q8'],
       'question19' => $request['q9'],
       'question20' => $request['q20'],
       'question21' => $request['q21'],
       'question22' => $request['q22'],
       'question23' => $request['q1'],
       'question24' => $request['q1'],
       'question25' => $request['q1'],
       'question26' => $request['q1'],
       'question27' => $request['q1'],
       'question28' => $request['q1'],
       'question29' => $request['q1'],
       'question30' => $request['q1'],
       'question31' => $request['q1'],
       'question32' => $request['q1'],
       'question33' => $request['q1'],
       'question34' => $request['q1'],
       'question35' => $request['q1'],
       'question36' => $request['q1'],
       'question37' => $request['q1'],
       'question38' => $request['q1'],
       'question39' => $request['q1'],
       'question40' => $request['q1'],
       'question41' => $request['q1'],
       'question42' => $request['q1'],
       'question43' => $request['q1'],
       'question44' => $request['q1'],
       'question45' => $request['q1'],
       'question46' => $request['q1'],
       'question47' => $request['q1'],
       'question48' => $request['q1'], 
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        $stands = acceptStandards::where('project_name' , $name)->get();
        return view('admin.standards' , compact('stands'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(acceptStandards $acceptStandards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, acceptStandards $acceptStandards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(acceptStandards $acceptStandards)
    {
        //
    }
}
