<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
    protected $fillable = ['name', 'user_id', 'email', 'phone', 'rating', 'feedback'];
}
