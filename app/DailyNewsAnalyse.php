<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyNewsAnalyse extends Model
{
    protected $fillable = ['title', 'date', 'pdf'];
}
