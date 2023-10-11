<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSeriesQuestion extends Model
{
    protected $fillable = [
        'test_series_quiz_id',
        'question',
        'option1',
        "option2",
        "option3",
        "option4",
        "correct_option",
        'status',
        'note'
    ];

    public function test_series_quiz()
    {
        return $this->belongsTo(TestSeriesQuiz::class);
    }
}
