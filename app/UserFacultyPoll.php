<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFacultyPoll extends Model
{

    protected $fillable = [
        'answer',
        'faculty_poll_id',
        'faculty_poll_question_id',
        'user_id',
    ];

    public function poll()
    {
        return $this->belongsTo(FacultyPoll::class);
    }
}
