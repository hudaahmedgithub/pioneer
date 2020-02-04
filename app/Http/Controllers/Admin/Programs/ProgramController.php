<?php

namespace App\Http\Controllers\Admin\Programs;
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
class ProgramController extends Controller
{
   
	public function index()
	{
		$programs=Program::all();
		$services=Service::all();
		return view('backend.programs.index',compact('programs','services'));
		
	}
	public function fetch()
	{
		$programs=Program::where('active','yes')->get();
		return  response()->json(['data'=>$programs]);	
	}
	public function show($id)
	{
		$data=Program::where('id',$id)->firstOrFail();
	    $serv=Service::where('id',$data->service_id)->firstOrFail();
		return response()->json(['data'=>$data,'serv'=>$serv->name]);
	}
	public function store(Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
        $program=new Program;
if ($request->file('image')) {
	
	
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/program_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $program->image = $name;
      }
        $program->name=$request->name;
		$program->service_id=$request->service_id;
		$program->description=$request->description;
		$program->save();
		$serv=Service::where('id',$program->service_id)->firstOrFail();
		return response()->json(['store'=>$program,'serv'=>$serv->name]);
		
		
	}
	public function update($id,Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
	
        $program=Program::find($id);
		$program->name=$request->name;
		$program->service_id=$request->service_id;
		$program->description=$request->description;
if ($request->file('image')) {
	if($request->file('image') != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/program_images/'.$program->image);			   
		   }
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/program_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $program->image = $name;
      }
        
		$program->save();
		//$serv=Service::where('id',$program->service_id)->firstOrFail();
		return response()->json(['edit'=>$program]);
		
		
	}
public function destroy(Request $request)
{
	$program=Program::find($request->id);
	$program->delete();
	if($program->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/program_images/'.$program->image);			   
		   }
	return response()->json();
		
}
    public function __construct(Program $program)
    {
        $this->model    = $program;
        $this->view     = "programs";
        $this->singular = 'program';
        $this->plural   = 'programs';
    }
	
}
