<?php

namespace App\Http\Controllers\Admin\Websites;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Program;
use App\Website;
use File;
use Validator,Redirect,Response;
class WebsiteController extends Controller
{
   
	public function index()
	{
		
		$websites=Website::all();
		return view('backend.websites.index',compact('websites'));
		
	}
	public function fetch()
	{
		$websites=Website::all();
		return  response()->json(['data'=>$websites]);
		
	}
	public function show($id)
	{
		$data=Website::where('id',$id)->firstOrFail();
	    
		return response()->json(['data'=>$data]);
	}
	public function store(Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
        $website=new Website;
if ($request->file('image')) {
	
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/website_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $website->image = $name;
      }
        $website->name=$request->name;
		$website->description=$request->description;
		$website->save();
		
		return response()->json(['store'=>$website]);
		
		
	}
	public function update($id,Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
	
        $website=Website::find($id);
		$website->name=$request->name;
		$website->title_slider=$request->title_slider;
		$website->description=$request->description;
if ($request->file('image')) {
	
	if($request->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/website_images/'.$website->image);			   
		   }
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/website_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $website->image = $name;
      }
        
		$website->save();
		
		return response()->json(['edit'=>$website]);
		
		
	}
public function destroy(Request $request)
{
	$website=Website::find($request->id);
	$website->delete();
	if($website->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/website_images/'.$website->image);			   
		   }
	return response()->json();
		
}
   
	
}
