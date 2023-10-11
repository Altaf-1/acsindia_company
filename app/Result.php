<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $fillable = ['user_id', 'rank', 'percentage', 'marks', 'total_marks', 'pdf','course','test_name','date','feedback'];

}
