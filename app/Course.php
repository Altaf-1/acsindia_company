<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = ['course_id', 'title', 'slug', 'description', 'days', 'timing',
        'price', 'sale', 'discount','image','active','url', 'use_coupon','is_gst', 'sequence'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(){
        return $this->belongsToMany(User::class);
    }


    public function order(){
        return $this->hasOne(Order::class);
    }
}
