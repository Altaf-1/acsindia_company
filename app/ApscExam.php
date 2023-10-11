<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApscExam extends Model
{
    protected $fillable = [
        'name', 'email', 'phone',
        'whatsAppNo', 'class', 'profile', 'place'
    ];
}
