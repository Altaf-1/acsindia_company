<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreeMasterClass extends Model
{
    protected $fillable = ['roll_no', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
