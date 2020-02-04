<?php

namespace App\Http\Controllers\Admin\Services;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Program;
use App\Service;
use File;
use Validator,Redirect,Response;
class ServiceController extends Controller
{
   
	public function index()
	{
		$services=Service::all();
		return view('backend.services.index',compact('services'));
		
	}
	public function fetch()
	{
		$services=Service::where('active','yes')->get();
		return  response()->json(['data'=>$services]);
		
	}
	public function show($id)
	{
		$data=Service::where('id',$id)->firstOrFail();
	    
		return response()->json(['data'=>$data]);
	}
	public function store(Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
        $service=new Service;
if ($request->file('image')) {
	
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/service_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $service->image = $name;
      }
        $service->name=$request->name;
		$service->description=$request->description;
		$service->save();
		
		return response()->json(['store'=>$service]);
		
		
	}
	public function update($id,Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
	
        $service=Service::find($id);
		$service->name=$request->name;
		$service->description=$request->description;
if ($request->file('image')) {
	
	if($request->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/service_images/'.$service->image);			   
		   }
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/service_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $service->image = $name;
      }
        
		$service->save();
		
		return response()->json(['edit'=>$service]);
		
		
	}
public function destroy(Request $request)
{
	$service=Service::find($request->id);
	$service->delete();
	if($service->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/service_images/'.$service->image);			   
		   }
	
	return response()->json();
		
}
    public function __construct(Service $service)
    {
        $this->model    = $service;
        $this->view     = "services";
        $this->singular = 'service';
        $this->plural   = 'services';
    }
	
}
