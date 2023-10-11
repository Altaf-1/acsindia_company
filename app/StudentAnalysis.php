<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAnalysis extends Model
{
    //
    protected $fillable = [
        'student_name',
        'student_email',
        'student_phone',
    ];

    public function studentAnalysisWebinarCounts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(StudentAnalysisWebinarCount::class);
    }

    public function getCounsellor($email, $phone)
    {
        $counsellor = UserWebinar::where('user_email', $email)
            ->orWhere('user_phone', $phone)->first();

        if ($counsellor) {
            return UserWebinarCounsellor::where('counsellor_id', $counsellor->counsellor_id)->first()->name;
        }
        return "No Counsellor Found";
    }
}
