<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstallmentPermission extends Model
{
    //
    protected $fillable = ['user_id', 'status'];
}
