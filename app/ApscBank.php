<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApscBank extends Model
{
    //
    protected $fillable = ['apsc_course_id', 'user_id', 'payment_type', 'receipt', 'status'];

    public function apsc_course(){
        return $this->belongsTo(ApscCourses::class);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
