<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable=['course','title','date','weak','pdf','due_date','type','is_active'];
}
