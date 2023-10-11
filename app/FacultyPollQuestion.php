<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyPollQuestion extends Model
{
    protected $fillable = [
        'faculty_poll_id',
        'question',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'answer',
    ];
}
