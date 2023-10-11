<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPoll extends Model
{
    //
    protected $fillable = ['answer', 'poll_id'];

    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    public function get_poll($id){
        return Poll::find($id)->question;
    }
}
