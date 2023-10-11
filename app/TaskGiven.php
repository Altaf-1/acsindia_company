<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskGiven extends Model
{
    //
    protected $fillable = ['admin_id', 'task', 'file', 'status'];
}
