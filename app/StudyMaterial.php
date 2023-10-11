<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyMaterial extends Model
{
    protected $fillable=['course_id','slug','title','active','options', 'description', 'price', 'image',
        'front_options', 'use_coupon','is_gst', 'sequence'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(){
        return $this->belongsToMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function study_razor(){
        return $this->hasOne(StudyRazor::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function study_bank(){
        return $this->hasOne(StudyBank::class);
    }
}
