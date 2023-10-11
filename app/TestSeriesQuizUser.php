<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSeriesQuizUser extends Model
{
    protected $fillable = ['test_series_quiz_id', 'question_id',  'user_id', 'answer'];

    public function test_series_quiz()
    {
        return $this->belongsTo(TestSeriesQuiz::class);
    }
    public function test_series_question()
    {
        return $this->belongsTo(TestSeriesQuestion::class, 'question_id');
    }
}
