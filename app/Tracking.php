<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    //
    protected $fillable = ['tracking_id', 'user_id', 'course_title'];

    /**
     * @param $userId
     * @return mixed
     */
    public function userData($userId)
    {
        $user = User::findOrFail($userId);
        return $user;
    }
}
