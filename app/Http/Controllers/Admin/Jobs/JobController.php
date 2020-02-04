<?php

namespace App\Http\Controllers\Admin\Jobs;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Program;
use App\Job;
use File;
use Validator,Redirect,Response;
class jobController extends Controller
{
   
	public function index()
	{
		
		$jobs=job::all();
		return view('backend.jobs.index',compact('jobs'));
		
	}
	public function fetch()
	{
		$jobs=Job::where('active','yes')->get();
		return  response()->json(['data'=>$jobs]);
		
	}
	public function show($id)
	{
		$data=Job::where('id',$id)->firstOrFail();
	    
		return response()->json(['data'=>$data]);
	}
	public function store(Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
        $job=new Job;
if ($request->file('image')) {
	
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/job_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $job->image = $name;
      }
        $job->name=$request->name;
		$job->description=$request->description;
		$job->save();
		
		return response()->json(['store'=>$job]);
		
		
	}
	public function update($id,Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
	
        $job=Job::find($id);
		$job->name=$request->name;
		$job->description=$request->description;
if ($request->file('image')) {
	
	if($request->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/job_images/'.$job->image);			   
		   }
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/job_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $job->image = $name;
      }
        
		$job->save();
		
		return response()->json(['edit'=>$job]);
		
		
	}
public function destroy(Request $request)
{
	$job=Job::find($request->id);
	$job->delete();
	if($job->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/job_images/'.$job->image);			   
		   }
	return response()->json();
		
}
    public function __construct(job $job)
    {
        $this->model    = $job;
        $this->view     = "jobs";
        $this->singular = 'job';
        $this->plural   = 'jobs';
    }
	
}
