<?php

namespace App\Http\Controllers\Admin\Contacts;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Program;
use App\Contact;
use File;
use Validator,Redirect,Response;
class ContactController extends Controller
{
   
	public function index()
	{
		
		$contacts=Contact::all();
		return view('backend.contacts.index',compact('contacts'));
		
	}
	public function fetch()
	{
		$contacts=Contact::where('watch',0)->get();
		return  response()->json(['data'=>$contacts]);
		
	}
	public function indexRead()
	{
	    $contacts=Contact::all();
		return view('backend.contacts.index2',compact('contacts'));
		
	}
	public function fetchRead()
	{
		$contacts=Contact::where('watch',1)->get();
		return  response()->json(['data'=>$contacts]);
		
	}
	
	public function show($id)
	{
		$data=Contact::where('id',$id)->firstOrFail();
	    
		return response()->json(['data'=>$data]);
	}
	
	public function update($id)
	{

        $contact=Contact::find($id);
		$contact->watch=1;
		$contact->save();
		return response()->json();
		
		
	}
public function destroy(Request $request)
{
	$contact=Contact::find($request->id);
	$contact->delete();
	
	return response()->json();
		
}
    
}
