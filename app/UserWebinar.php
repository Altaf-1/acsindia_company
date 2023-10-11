<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserWebinar extends Model
{
    //
    protected $fillable = [
        'user_id',
        'counsellor_id',
        'webinar',
        'user_name',
        'user_email',
        'user_phone',
        'user_state',
        'is_user_has_course',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function counsellor()
    {
        return $this->belongsTo(UserWebinarCounsellor::class, 'counsellor_id', 'counsellor_id');
    }

    public function check_user_course($email)
    {
        $user = User::where('email', $email)->first();
        $courseUserTables = [
            'course_user' => 'courses',
            'study_material_user' => 'study_materials',
            'recorded_user' => 'recorded',
            'apsc_courses_user' => 'apsc_courses'
        ];

        if ($user) {
            foreach ($courseUserTables as $key => $table) {
                $userCourse = DB::table($key)->where('user_id', $user->id)
                    ->first();
                if ($userCourse) {
                    $columns = [
                        'course_user' => 'course_id',
                        'study_material_user' => 'study_materials',
                        'recorded_user' => 'recorded_id',
                        'apsc_courses_user' => 'apsc_courses_id'
                    ];
                    $column = $columns[$key];
                    $course = DB::table($table)->where('id', $userCourse->$column)->first();
                    return array($course->title, $userCourse->created_at);
                }
            }
            return array('', '');
        }
        return array('', '');
    }

}
