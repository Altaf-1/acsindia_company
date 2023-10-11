<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    //

    protected $fillable = ['admin_id', 'task_id','name', 'number', 'feedback', 'follow'];
}
