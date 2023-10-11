<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventData extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'city', 'application_form', 'profile_img'];
}
