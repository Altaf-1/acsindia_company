<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable = ['invoice_id',
        'payment_id',
        'user_id',
        'amount',
        'course',
        'mode',
        'cgst',
        'sgst'];


    /**
     * Helper Functions
     */
    public static function getCourseDetails($courseTitle)
    {
        $upscCourse = \App\Course::where("title", $courseTitle)->first();
        if ($upscCourse) {
            return $upscCourse;
        }

        $apscCourse = \App\ApscCourses::where("title", $courseTitle)->first();
        if ($apscCourse) {
            return $apscCourse;
        }

        $studyMaterial = \App\StudyMaterial::where("title", $courseTitle)->first();
        if ($studyMaterial) {
            return $studyMaterial;
        }

        $recordedCourse = \App\Recorded::where("title", $courseTitle)->first();
        if ($recordedCourse) {
            return $recordedCourse;
        }

        return null;
    }
}
