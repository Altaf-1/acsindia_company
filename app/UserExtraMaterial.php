<?php

namespace App;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExtraMaterial extends Model
{

    protected $fillable = [
        'course_type_id',
        'course_id',
        'user_id',
        'extra_material_id',
    ];


    /**
     * @param $user_id
     * @param $course_type_id
     * @param $course_id
     * @return mixed
     */
    public static function get_user_extra_material($user_id, $course_type_id, $course_id){
        $userExtraMaterial = UserExtraMaterial::where('user_id', $user_id)
            ->where('course_type_id', $course_type_id)
            ->where('course_id', $course_id)
            ->get();
        return $userExtraMaterial;
    }

    /**
     * @param $course_type_id
     * @param $course_id
     * @param $extra_material_id
     * @return bool
     */
    public static function check_material_exists($course_type_id, $course_id, $extra_material_id, $user_id = null){
        $user_id = $user_id ?? auth()->user()->id;
        $user_extra_material = UserExtraMaterial::where('user_id', $user_id)
            ->where('course_type_id', $course_type_id)
            ->where('course_id', $course_id)
            ->where('extra_material_id', $extra_material_id)
            ->first();
        return (bool)$user_extra_material;
    }


    public static function get_total_amount($course_type_id, $course_id, $user_id = null){
        $user_id = $user_id ?? auth()->user()->id;
        $user_extra_material = UserExtraMaterial::where('user_id', $user_id)
                ->where('course_type_id', $course_type_id)
                ->where('course_id', $course_id)
                ->get();

        $total_amount = 0;

        foreach ($user_extra_material as $item){
            if ($item->extra_material_id == 1){
                $total_amount += 2000;
            }
            if ($item->extra_material_id == 2){
                $total_amount += 2000;
            }
        }

        return $total_amount;

    }

}

