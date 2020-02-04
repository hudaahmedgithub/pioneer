<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complane extends Model
{
     protected $fillable = [
       'name','description','image','active'
    ];
    protected $guarded = ['id'];

   protected $appends = ['image_path'];


    public function getImagePathAttribute()
    {
        return asset('uploads/compalne_images/' . $this->image);

    }
}
