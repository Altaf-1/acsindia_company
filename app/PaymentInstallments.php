<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;


class PaymentInstallments extends Model
{
    //
    protected $fillable=['course_id', 'user_id', 'unique_course_id', 'amount_paid', 'status',
        'receipt_image'];

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->setAttribute($model->getKeyName(), Uuid::uuid4());
        });
    }

    public function userName($id){
        return User::findOrFail($id)->name;
    }

    public function getCourseName($id, $unique_course_id, $field){
        if($id == 1){
            return Course::where('id', $unique_course_id)->select([DB::raw("{$field} as result")])->get()->first();
        }
        elseif ($id == 2){
            return ApscCourses::where('id', $unique_course_id)->select([DB::raw("{$field} as result")])->get()->first();
        }
        elseif ($id == 3){
            $field = $field == "sale" ? "price" : $field;
            return StudyMaterial::where('id', $unique_course_id)->select([DB::raw("{$field} as result")])->get()->first();
        }
        elseif ($id == 4){
            return Recorded::where('id', $unique_course_id)->select([DB::raw("{$field} as result")])->get()->first();
        }
    }

    public function lastInstallment($user_id, $unique_course_id){
        return PaymentInstallments::where('user_id', $user_id)->where('unique_course_id', $unique_course_id)->orderBy('updated_at', 'desc')->first()->amount_paid;
    }

    // check if user is enrolled in a course
    public function isEnrolled($user_id, $unique_course_id, $course_id){
        if ($course_id == 1){
            return DB::table('course_user')->where('user_id', $user_id)
                ->where('course_id', $unique_course_id)->exists();
        }
        elseif ($course_id == 2){
            return DB::table('apsc_courses_user')->where('user_id', $user_id)
                ->where('apsc_courses_id', $unique_course_id)->exists();
        }
        elseif ($course_id == 3){
            return DB::table('study_material_user')->where('user_id', $user_id)
                ->where('study_material_id', $unique_course_id)->exists();
        }
        elseif ($course_id == 4){
            return DB::table('recorded_user')->where('user_id', $user_id)
                ->where('recorded_id', $unique_course_id)->exists();
        }
    }

}
