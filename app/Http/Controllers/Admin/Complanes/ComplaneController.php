<?php

namespace App\Http\Controllers\Admin\Complanes;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Program;
use App\Complane;
use File;

use Validator,Redirect,Response;
class ComplaneController extends Controller
{
   
	public function index()
	{
		$complanes=Complane::all();
		return view('backend.complanes.index',compact('complanes'));
		
	}
	public function fetch()
	{
		$complanes=Complane::where('active','yes')->get();
		return  response()->json(['data'=>$complanes]);
		
	}
	public function searchComplane(Request $request)
	{
	if($request->ajax())
		{
		$data=Complane::where('name','like','%'. $request->search .'%')->orWhere('description','like','%'. $request->search .'%' )
        ->firstOrFail();
		$complanes=Complane::where('id',$data->id)->get();
		 return response()->json(['complanes'=>$complanes]);
		}
	}
	public function show($id)
	{
		$data=Complane::where('id',$id)->firstOrFail();
	    
		return response()->json(['data'=>$data]);
	}
	public function store(Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
        $complane=new Complane;
if ($request->file('image')) {
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/compalne_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $complane->image = $name;
      }
        $complane->name=$request->name;
		$complane->description=$request->description;
		$complane->save();
		
		return response()->json(['store'=>$complane]);
		
		
	}
	public function update($id,Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
	
        $complane=Complane::find($id);
		$complane->name=$request->name;
		$complane->description=$request->description;
if ($request->file('image')) {
	if($request->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/complane_images/'.$complane->image);			   
		   }
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/complane_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $complane->image = $name;
      }
        
		$complane->save();
		
		return response()->json(['edit'=>$complane]);
		
		
	}
public function destroy(Request $request)
{
	$comp=Complane::find($request->id);
	$comp->delete();
	if($comp->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/complane_images/'.$comp->image);			   
		   }
	
	return response()->json();
		
}
    public function __construct(Complane $complane)
    {
        $this->model    = $complane;
        $this->view     = "companies";
        $this->singular = 'complane';
        $this->plural   = 'companies';
    }
	
}
