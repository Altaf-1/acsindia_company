<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmissionEnquery extends Model
{
    protected $fillable=['name', 'email', 'phone', 'address', 'visitors', 'source','branch'];
}
