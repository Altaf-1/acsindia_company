<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class RequestCoupon extends Model
{
    protected $fillable=['name','email','phone'];
}
