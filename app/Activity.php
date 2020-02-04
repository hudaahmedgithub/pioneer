<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
       'name','description','image','active'
    ];
    protected $guarded = ['id'];

   
}
