<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoRating extends Model
{
    //
    protected $fillable = ['video_id', 'rating', 'user_id'];


}
