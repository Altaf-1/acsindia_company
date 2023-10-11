<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyPoll extends Model
{
    protected $fillable = [
        'user_id',
        'poll_name',
        'poll_description',
        'status',
    ];

    public function faculty_poll_questions()
    {
        return $this->hasMany(FacultyPollQuestion::class, 'faculty_poll_id');
    }

    //user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //user
    public function count_reposnses($id)
    {
        return UserFacultyPoll::where('faculty_poll_id', $id)->get()->unique('id')->count();
    }
}
