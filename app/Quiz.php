<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['quiz_name', 'description',  'quiz_date', 'status', 'set', 'total_time'];

    public function questions()
    {
        return $this->hasMany(Question::class, 'quiz_id');
    }
}
