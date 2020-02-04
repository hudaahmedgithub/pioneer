<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Phone;
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
}
