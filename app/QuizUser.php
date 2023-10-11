<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizUser extends Model
{
    protected $fillable = ['quiz_id', 'question_id',  'user_id', 'answer'];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
