<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewPreparation extends Model
{
    protected $fillable = ['roll_number', 'user_id','profile','attachment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
