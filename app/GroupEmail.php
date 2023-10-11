<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupEmail extends Model
{
    protected $fillable = [
        'course', 'subject',  'email_body'
    ];
}
