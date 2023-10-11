<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CouponTemp extends Model
{
    //
    protected $fillable = [
        'user_id',
        'code',
        'applied'
    ];
}
