<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    //
    protected $fillable = ['admin_id', 'name', 'email', 'file','reason', 'status'];
}
