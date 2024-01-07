<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutsideCourseUser extends Model
{

    protected $fillable = [
        'name', 'email', 'phone',
        'feedback',
    ];


    /**
     * @return bool
     */
    public function courseTaken($email)
    {
        $user = User::where('email', $email)->get()->first();
        if (!$user) {
            return 'No Course Taken';
        }
        $courses = array();
        foreach ($user->courses as $course) {
            array_push($courses, $course->title);
        }
        foreach ($user->apsc_courses as $course) {
            array_push($courses, $course->title);
        }
        foreach ($user->study_materials as $course) {
            array_push($courses, $course->title);
        }
        foreach ($user->recorded_courses as $course) {
            array_push($courses, $course->title);
        }
        if ($courses == null && !empty($course)) {
            return implode(",", $courses);
        } else {
            return 'No Course Taken';
        }
    }
}
