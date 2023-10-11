<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'city', 'qualification', 'type', 'whatsapp_no', 'solo_debate', 'quiz'];
}
