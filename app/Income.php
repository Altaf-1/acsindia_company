<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    //
    protected $fillable = ['staff_id', 'month','basic', 'earning', 'earning_reason', 'deduction', 'deduction_reason', 'net_salary'];
    
       /**
     * @param $staff_id
     * @return mixed
     */
    public function getStaffDetails($staffId)
    {
        return StaffInformation::where('staff_id', $staffId)->get()->first();
    }
}
