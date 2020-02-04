<?php

namespace App\Http\Controllers\Admin\Offers;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Program;
use App\Offer;
use File;
use Validator,Redirect,Response;
class OfferController extends Controller
{
   
	public function index()
	{
		
		$offers=Offer::all();
		return view('backend.offers.index',compact('offers','offers'));
		
	}
	public function fetch()
	{
		$offers=Offer::where('active','yes')->get();
		return  response()->json(['data'=>$offers]);
		
	}
	public function show($id)
	{
		$data=Offer::where('id',$id)->firstOrFail();
	    
		return response()->json(['data'=>$data]);
	}
	public function store(Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
        $offer=new Offer;
if ($request->file('image')) {
	
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/offer_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $offer->image = $name;
      }
        $offer->name=$request->name;
		$offer->sale=$request->sale;
		$offer->description=$request->description;
		$offer->save();
		
		return response()->json(['store'=>$offer]);
		
		
	}
	public function update($id,Request $request)
	{
$validator = Validator::make($request->all(), [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
	
        $offer=Offer::find($id);
		$offer->name=$request->name;
		$offer->sale=$request->sale;
		$offer->description=$request->description;
if ($request->file('image')) {
	
	if($request->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/offer_images/'.$offer->image);			   
		   }
        $image = $request->file('image');
        $name = str_slug($request->name).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/offer_images');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $offer->image = $name;
      }
        
		$offer->save();
		
		return response()->json(['edit'=>$offer]);
		
		
	}
public function destroy(Request $request)
{
	$offer=Offer::find($request->id);
	$offer->delete();
	if($offer->image != 'default.png')
		 {
			Storage::disk('public_uploads')->delete('/offer_images/'.$offer->image);			   
		   }
	
	return response()->json();
		
}
    public function __construct(Offer $offer)
    {
        $this->model    = $offer;
        $this->view     = "offers";
        $this->singular = 'offer';
        $this->plural   = 'offers';
    }
	
}
