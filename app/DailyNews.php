<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyNews extends Model
{
    protected $fillable = ['title', 'date', 'pdf'];
}
