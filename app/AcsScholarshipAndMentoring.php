<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcsScholarshipAndMentoring extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'year', 'location','type'];
}
