<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRating extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone', 'news', 'thought', 'join',
        'preparation', 'interest', 'coaching', 'coupon_id', 'news_message', 'preparation_message'];

    public function coupon($id)
    {
        return Coupon::where('id', $id)->get()->first()->coupon_code;
    }
}
