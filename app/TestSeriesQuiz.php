<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSeriesQuiz extends Model
{
    protected $fillable = ['quiz_name', 'status', 'set','type','pdf'];

    public function test_series_questions()
    {
        return $this->hasMany(TestSeriesQuestion::class, 'test_series_quiz_id');
    }
}
