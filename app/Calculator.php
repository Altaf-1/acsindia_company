<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    protected $fillable=['name', 'email', 'phone', 'roll_number', 'acs_student', 'paper', 'correct_ans', 'wrong_ans','total','per'];
}
