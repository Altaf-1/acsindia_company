<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyTask extends Model
{
    //
    protected $fillable = ['admin_id', 'task', 'file'];
}
