<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreeTrialCourse extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'whatsapp_no'
    ];
}
