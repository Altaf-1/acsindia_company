<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable=['date', 'title', 'course', 'duration','link', 'total_marks','note'];
}
