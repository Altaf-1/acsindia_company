<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffInformation extends Model
{
    protected $fillable=[
        'staff_id', 'role', 'name', 'email', 'phone',
        'gender', 'dob', 'doj','basic','image',
        'address', 'qualifications', 'work_experience',
        'guardian_name','relation','guardian_phone','guardian_email'];
}
