<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterCourse extends Model
{
    protected $fillable=['course_name','time','start_date','fee_GST'];

}
