<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSeriesQuizRollUser extends Model
{
    protected $fillable = ['test_series_quiz_roll_id', 'question_id',  'user_id', 'answer'];

    public function test_series_quiz_roll()
    {
        return $this->belongsTo(TestSeriesQuizRoll::class);
    }
    public function test_series_question()
    {
        return $this->belongsTo(TestSeriesQuizQuestionRoll::class, 'question_id');
    }
}
