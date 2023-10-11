<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineQuizQuestion extends Model
{
    protected $fillable = [
        'online_quiz_id',
        'question',
        'option1',
        "option2",
        "option3",
        "option4",
        "correct_option",
        'status',
        'note',
        'point',
        'explanation1',
        'explanation2',
        'explanation3',
        'explanation4',
    ];

    public function quiz()
    {
        return $this->belongsTo(OnlineQuiz::class, 'online_quiz_id');
    }
}
