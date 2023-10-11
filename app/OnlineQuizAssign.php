<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineQuizAssign extends Model
{
    protected $fillable = [
        'online_quiz_id',
        'course_name',
    ];

    public function quiz()
    {
        return $this->belongsTo(OnlineQuiz::class, 'online_quiz_id');
    }
    // find user questions attempt left
    public function user_attempt_left($quiz_id)
    {
        $user_id = Auth()->user()->id;
        // if (QuizResult::where('online_quiz_id', $quiz_id)->where('user_id', $user_id)->get()->isEmpty()) {
        //     return true;
        // } else {
        //     return false;
        // }
    }
}
