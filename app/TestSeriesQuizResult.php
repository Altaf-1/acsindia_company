<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSeriesQuizResult extends Model
{
    protected $fillable = [
        'user_id',
        'test_series_quiz_id',
        'course_name',
        'total_mark',
        'correct_answers',
        'wrong_answers',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function test_series_quiz()
    {
        return $this->belongsTo(TestSeriesQuiz::class);
    }
}
