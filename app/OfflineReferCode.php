<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfflineReferCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'refer_code',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
