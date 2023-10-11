<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAdmissionPay extends Model
{
    protected $fillable=['student_admission_id','add_pay', 'date', 'mode'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student_admissions(){
        return $this->belongsTo(StudentAdmission::class);
    }
}
