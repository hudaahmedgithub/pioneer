<?php

namespace App\Http\Controllers\Admin\Experiences;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Experience;
use File;
use Validator,Redirect,Response;
class ExperienceController extends Controller
{
   
	public function index()
	{
		return view('backend.experiences.index');
		
	}
	public function fetch()
	{
		$experiences=Experience::all();
		return  response()->json(['data'=>$experiences]);
		
	}
	public function searchExper(Request $request)
	{
	if($request->ajax())
		{
		$data=Experience::where('name','like','%'. $request->search .'%')->orWhere('description','like','%'. $request->search .'%' )
        ->firstOrFail();
		$exper=Experience::where('id',$data->id)->get();
		 return response()->json(['experience'=>$exper]);
		}
	}
	public function show($id)
	{
		$data=Experience::where('id',$id)->firstOrFail();
	    
		return response()->json(['data'=>$data]);
	}
	public function store(Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
        $experience=new Experience;
    if ($request->file('image')) {
	
	
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/experience_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $experience->image = $name;
      }
        
        $experience->name=$request->name;
		$experience->description=$request->description;
		$experience->save();
		
		return response()->json(['store'=>$experience]);
		
		
	}
	public function update($id,Request $request)
	{
		$validator = Validator::make($request->all(), [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
		$experience=Experience::find($id);
		if ($request->file('image')) {
	
	if($request->file('image') != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/experience_images/'.$experience->image);			   
		   }
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/experience_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $experience->image = $name;
      }
        
		$experience->name=$request->name;
		$experience->description=$request->description;
		
        $experience->save();
		
		return response()->json(['edit'=>$experience]);
	}
public function destroy(Request $request)
{
	$experience=Experience::find($request->id);
	$experience->delete();
	if($experience->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/experience_images/'.$experience->image);			   
		   }
	
	return response()->json();
	
}
   
	
}
