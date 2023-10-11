<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAssignment extends Model
{
    protected $fillable = ['user_id', 'assignment_id', 'course', 'pdf', 'score', 'feedback', 'result'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }
}
