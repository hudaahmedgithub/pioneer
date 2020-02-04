<?php

namespace App\Http\Controllers\Admin\Activites;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Program;
use App\Activity;
use File;
use Validator,Redirect,Response;
class ActivityController extends Controller
{
   
	public function index()
	{
		
		$activites=Activity::all();
		return view('backend.activites.index',compact('activites'));
		
	}
	public function fetch()
	{
		$activites=Activity::all();
		
		return  response()->json(['data'=>$activites]);
		
	}
	public function show($id)
	{
		$data=Activity::where('id',$id)->firstOrFail();
	    
		return response()->json(['data'=>$data]);
	}
	public function store(Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
        $activity=new Activity;
if ($request->file('image')) {
	
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/activity_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $activity->image = $name;
      }
        $activity->name=$request->name;
		$activity->description=$request->description;
		$activity->save();
		
		return response()->json(['store'=>$activity]);
		
		
	}
	public function update($id,Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
	
        $activity=Activity::find($id);
		$activity->name=$request->name;
		$activity->description=$request->description;
if ($request->file('image')) {
	
	if($request->file('image') != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/activity_images/'.$activity->image);			   
		   }
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/activity_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $activity->image = $name;
      }
        
		$activity->save();
		
		return response()->json(['edit'=>$activity]);
		
		
	}
public function destroy(Request $request)
{
	$activity=Activity::find($request->id);
	$activity->delete();
	if($activity->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/activity_images/'.$activity->image);			   
		   }
	return response()->json();
		
}
   
	
}
