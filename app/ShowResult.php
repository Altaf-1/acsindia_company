<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowResult extends Model
{
    protected $fillable = ['percentage', 'name', 'state', 'rank','test_name','date','course','image'];
}
