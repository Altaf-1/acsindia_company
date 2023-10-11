<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    //
    protected $fillable = ['staff_id',
        'month',
        'punctuality',
        'punctuality_reason',
        'leave',
        'leave_reason',
        'work',
        'work_reason',
        'director',
        'director_reason',
        'total',
        'overall'
        ];

    /**
     * @param $staff_id
     * @return mixed
     */
    public function getStaffDetails($staffId)
    {
        return StaffInformation::where('staff_id', $staffId)->get()->first();
    }
}
