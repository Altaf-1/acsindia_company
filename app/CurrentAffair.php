<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentAffair extends Model
{
    //
    protected $fillable = [
        'title',
        'long_title',
        'content',
        'image_thumbnail',
        'image',
        'year',
         'type'
    ];
}
