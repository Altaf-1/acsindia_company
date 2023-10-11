<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestSeriesQuizRoll extends Model
{
    protected $fillable = ['quiz_name', 'status', 'set', 'type', 'pdf'];

    public function test_series_questions()
    {
        return $this->hasMany(TestSeriesQuizQuestionRoll::class, 'test_series_quiz_roll_id');
    }
}
