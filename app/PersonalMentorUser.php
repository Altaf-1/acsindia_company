<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalMentorUser extends Model
{
    protected $fillable = ['user_id', 'course_name', 'day',  'slot'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
