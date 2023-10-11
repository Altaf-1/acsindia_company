<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassVideo extends Model
{
    //
    protected $fillable = ['title','type', 'video', 'knowledge', 'download', 'course', 'date'];
}
