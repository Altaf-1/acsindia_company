<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatStudent extends Model
{
    //
    protected $fillable = ['teacher_id', 'student_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
}
