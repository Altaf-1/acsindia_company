<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineQuizResult extends Model
{
    protected $fillable = [
        'user_id',
        'online_quiz_id',
        'course_name',
        'total_mark',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function online_quiz()
    {
        return $this->belongsTo(OnlineQuiz::class);
    }
}
