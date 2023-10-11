<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskComplete extends Model
{
    //
    protected $fillable = ['task_id', 'admin_id', 'email', 'task', 'file', 'status'];
}
