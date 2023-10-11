<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApscOrder extends Model
{
    //
    protected $fillable = ['order_id', 'payment_id', 'receipt_id',
        'user_id', 'apsc_course_id', 'amount', 'status'];


    public function apsc_course(){
        return $this->belongsTo(ApscCourses::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }


}
