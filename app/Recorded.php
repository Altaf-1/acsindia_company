<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recorded extends Model
{
    protected $fillable = ['course_id','title', 'slug', 'description', 'days', 'timing',
        'price', 'sale', 'discount','image','active','options','front_options', 'use_coupon','is_gst', 'sequence'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(){
        return $this->belongsToMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recorded_order(){
        return $this->hasOne(RecordedRazor::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recorded_bank(){
        return $this->hasOne(RecordedBank::class);
    }
}
