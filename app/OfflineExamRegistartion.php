<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfflineExamRegistartion extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'whatsapp_no',
        'city',
        'image',
        'state'
    ];
}
