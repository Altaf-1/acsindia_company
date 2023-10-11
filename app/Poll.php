<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    //
    protected $fillable = ['title', 'question', 'option_1', 'option_2', 'option_3', 'option_4', 'answer', 'status'];

    public function user_polls()    {
        return $this->hasMany(UserPoll::class);
    }
}
