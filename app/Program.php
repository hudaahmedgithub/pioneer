<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
   
    protected $fillable = [
       'service_id','name','description','image','active'
    ];
    protected $guarded = ['id'];

   protected $appends = ['image_path'];


    public function getImagePathAttribute()
    {
        return asset('uploads/program_images/' . $this->image);

    }
	
	public function service()
	{
		return $this->belongsTo(Service::class);
	}
}
