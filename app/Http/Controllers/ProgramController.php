<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Service;
use App\Phone;
use App\Country;
class ProgramController extends Controller
{
  
    public function index()
    {
        $programs = Program::all();
		$services=Service::all();
		return view('frontend.programs.index',compact('programs','services'));
    }
	public function programsExp()
	{
		$programs = Program::all();
		$services=Service::all();
		$countries =Country::all();
		return view('frontend.programs.programsExp',compact('programs','services','countries'));
	}
   public function programDetails($id)
	{
		$program=Program::findOrFail($id);
	    $phones=Phone::all();
	    $countries =Country::all();
		if($program->id==97)
		{
		return view('frontend.programs.program1',compact('phones','countries'));	
		}
		if($program->id==98)
		{
		return view('frontend.programs.program2',compact('phones','countries'));	
		}
		if($program->id==99)
		{
		return view('frontend.programs.program3',compact('phones','countries'));	
		}
		if($program->id==100)
		{
		return view('frontend.programs.program4',compact('phones','countries'));	
		}
	   if($program->id==102)
		{
		return view('frontend.programs.program4',compact('phones','countries'));	
		}
		
	}
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
