<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
   protected $fillable = [
       'name','description','image','active'
    ];
    protected $guarded = ['id'];

   protected $appends = ['image_path'];


    public function getImagePathAttribute()
    {
        return asset('uploads/job_images/' . $this->image);

    }
}
