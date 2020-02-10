<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Phone;
use App\Program;
use App\Website;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$services=Service::all();
		$slider=Website::firstOrFail();
        return view('frontend.home.home',compact('slider','services'));
    }
	
	public function about()
	{
		$phones=Phone::all();
		
        return view('frontend.home.about',compact('phones'));
	}
	public function map()
	{
		$programs=Program::all();
		return view('frontend.home.map',compact('programs'));
	}
	public function clients()
	{
		return view('frontend.home.clients');
	}
	public function getSearch(Request $request)
	{
	if($request->ajax())
		{
		$data=Program::where('name','like','%'. $request->search .'%')
        ->firstOrFail();
		$programs=Program::where('id',$data->id)->get();
		 return view('frontend.programs.search',['programs'=>$programs]);
		
	   }
	}
	public function getSearchP(Request $request)
	{
	if($request->ajax())
		{
		$data=Program::where('name','like','%'. $request->searchp .'%')
        ->firstOrFail();
		$programs=Program::where('id',$data->id)->get();
		 return view('frontend.programs.searchprogram',['programs'=>$programs]);
	 	
	  }
	}
}
