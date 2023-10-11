<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWebinarCounsellor extends Model
{
    //
    protected $fillable = [
        'counsellor_id',
        'name'
    ];

    public static function get_counsellor_data(){
        $data = UserWebinarCounsellor::all();
        return $data;
    }

    public function get_user_webinar_data($counsellor_id, $webinar, $state){
            if ($state == null) {
                $data = UserWebinar::where('counsellor_id', $counsellor_id)
                    ->where('webinar', $webinar)
                    ->where('is_user_has_course', 1)
                    ->get();
            } else {
                $data = UserWebinar::where('counsellor_id', $counsellor_id)
                    ->where('webinar', $webinar)
                    ->where('user_state', $state)
                    ->where('is_user_has_course', 1)
                    ->get();
            }
        return $data;
    }
}
