<?php

namespace App\Imports\UserWebinar;

use App\User;
use App\UserWebinar;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserWebinarImport implements ToCollection,  WithHeadingRow, SkipsOnFailure, SkipsOnError
{

    public function __construct(string|null $counseller_id)
    {
        $this->counseller_id = $counseller_id;
    }

    use Importable, SkipsFailures, SkipsErrors;
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            list($row['is_user_has_course'], $row['user_id']) = $this->check_user_course($row);

            $user_webinar_data = [
                'user_id' => $row['user_id'],
                'counsellor_id' => $this->counseller_id,
                'webinar' => $row['webinar'] ?? null,
                'is_user_has_course' => $row['is_user_has_course'],
                'user_name' => $row['user_name'],
                'user_email' => $row['user_email'],
                'user_phone' => $row['user_phone'],
                'user_state' => $row['user_state'] ?? null,
            ];



            if ($this->counseller_id == null) {
                $user_record =  UserWebinar::where('user_email', $row['user_email'])->first();
                if ($user_record) {
                    $user_record->user_id = $row['user_id'];
                    $user_record->webinar = $row['webinar'];
                    $user_record->user_state = $row['user_state'];
                    $user_record->is_user_has_course = $row['is_user_has_course'];
                    $user_record->save();
                }else{
                    UserWebinar::create($user_webinar_data);
                }
            }else{
                UserWebinar::create($user_webinar_data);
            }


        }

        return $collection;
    }

    public function check_user_course($user_data){
        $user = User::where('email', $user_data['user_email'])->first();
        $course_user_tables = ['course_user', 'study_material_user', 'recorded_user', 'apsc_courses_user'];

        if($user){
            foreach ($course_user_tables as $key => $table) {
                $user_course  = DB::table($table)->where('user_id', $user->id)->first();
                if ($user_course){
                    return array(true, $user->id);
                }
            }
            return array(false, $user->id);
        }
        return array(false, null);
    }


}
