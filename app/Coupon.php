<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //
    protected $fillable = ['coupon_code', 'coupon_discount', 'email', 'phone', 'status', 'applied'];
}
