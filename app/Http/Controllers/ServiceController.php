<?php

namespace App\Http\Controllers;

use App\Service;
use App\Program;
use Illuminate\Http\Request;
use App\Phone;
use App\Country;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $services = Service::all();
		return view('frontend.services.index',compact('services'));
		
    }
	public function servDetails($id)
	{
		$service=Service::find($id);
	    $phones=Phone::all();
		 $countries =Country::all();
		if($service->id==3)
		{
		return view('frontend.services.serv_web',compact('phones','countries'));	
		}
		if($service->id==4)
		{
		return view('frontend.services.serv_host',compact('phones','countries'));	
		}
		if($service->id==5)
		{
		return view('frontend.services.serv_market',compact('phones','countries'));	
		}
		if($service->id==6)
		{
		return view('frontend.services.serv_mobile',compact('phones','countries'));	
		}
		
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
