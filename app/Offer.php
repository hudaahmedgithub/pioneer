<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
       'name','description','image','active'
    ];
    protected $guarded = ['id'];

   protected $appends = ['image_path'];


    public function getImagePathAttribute()
    {
        return asset('uploads/offer_images/' . $this->image);

    }
}
