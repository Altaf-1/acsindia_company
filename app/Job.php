<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'city',
        'phone',
        'apply_for',
        'resume',
        'subjects',
    ];
}
