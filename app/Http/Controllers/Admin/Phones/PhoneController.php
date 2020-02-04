<?php

namespace App\Http\Controllers\Admin\Phones;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Phone;
use File;
use Validator,Redirect,Response;
class PhoneController extends Controller
{
   
	public function index()
	{
		return view('backend.phones.index');
		
	}
	public function fetch()
	{
		$phones=Phone::all();
		return  response()->json(['data'=>$phones]);
		
	}
	public function show($id)
	{
		$data=Phone::where('id',$id)->firstOrFail();
	    
		return response()->json(['data'=>$data]);
	}
	public function store(Request $request)
	{

        $phone=new Phone;

        $phone->name=$request->name;
		$phone->phone=$request->phone;
		$phone->save();
		
		return response()->json(['store'=>$phone]);
		
		
	}
	public function update($id,Request $request)
	{
		$phone=Phone::find($id);
		$phone->name=$request->name;
		$phone->phone=$request->phone;
        $phone->save();
		
		return response()->json(['edit'=>$phone]);
	}
public function destroy(Request $request)
{
	$phone=Phone::find($request->id);
	$phone->delete();
	
	return response()->json();
	
}
   
	
}
