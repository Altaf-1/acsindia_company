<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalMentor extends Model
{
    protected $fillable = ['course_name', 'day1',  'day2', 'day3', 'day4', 'day5', 'day6'];
}
