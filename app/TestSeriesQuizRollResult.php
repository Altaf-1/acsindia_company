<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSeriesQuizRollResult extends Model
{

    protected $fillable = [
        'user_id',
        'test_series_quiz_roll_id',
        'course_name',
        'total_mark',
        'correct_answers',
        'wrong_answers',
        'not_attempted_answers',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function test_series_quiz_roll()
    {
        return $this->belongsTo(TestSeriesQuizRoll::class);
    }
}
