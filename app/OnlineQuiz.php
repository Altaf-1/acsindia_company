<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineQuiz extends Model
{
    protected $fillable = ['quiz_name', 'description',  'quiz_date', 'status', 'total_time', 'pdf'];

    public function questions()
    {
        return $this->hasMany(OnlineQuizQuestion::class, 'online_quiz_id');
    }
}
