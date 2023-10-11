<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'quiz_id',
        'question',
        'option1',
        "option2",
        "option3",
        "option4",
        "correct_option", 'status', 'note'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
