<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSeriesAssign extends Model
{
    protected $fillable = [
        'test_series_quiz_id',
        'course_name',
    ];

    public function test_series_quiz()
    {
        return $this->belongsTo(TestSeriesQuiz::class);
    }
}
