<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewVideo extends Model
{
    protected $fillable = ['topic','sub_topic','title', 'video', 'knowledge', 'download', 'course', 'date'];
}
