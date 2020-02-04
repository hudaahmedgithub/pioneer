<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
    protected $fillable = [
     'name','description','image','active'
    ];
    protected $guarded = ['id'];

	protected $appends = ['image_path'];


    public function getImagePathAttribute()
    {
        return asset('uploads/service_images/' . $this->image);

    }
	public function programs()
	{
		return $this->hasMany('App\Program');
	}
	
}