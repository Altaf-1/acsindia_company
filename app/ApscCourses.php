<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApscCourses extends Model
{
    protected $fillable = ['course_id','title', 'slug', 'description', 'days', 'timing',
        'price', 'sale', 'discount','image','active','options', 'use_coupon','is_gst', 'sequence'];


    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function apsc_order(){
        return $this->hasOne(ApscOrder::class);
    }

    public function apsc_bank(){
        return $this->hasOne(ApscBank::class);
    }
}
