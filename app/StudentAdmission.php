<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudentAdmission extends Model
{
    protected $fillable = [
        'admission_no', 'roll_no', 'class',
        'std_name', 'std_email', 'std_phone', 'std_dob', 'std_gender',
        'std_state', 'std_district', 'std_category', 'std_photo',
        'admission_date',
        'guardian_name', 'relation', 'guardian_phone', 'guardian_email',
        'course', 'course_price', 'discount_amount', 'course_fee_pay', 'course_pending', 'pay_mode', 'branch',
        'refer_code_id', 'refer_discount'
    ];
    /**
     * @return HasMany
     */
    public function student_admission_pay()
    {
        return $this->hasMany(StudentAdmissionPay::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function courses($id)
    {
        return EnterCourse::findOrFail($id)->course_name;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function refer_code()
    {
        return $this->belongsTo(OfflineReferCode::class);
    }

    /**
     * @param $month
     * @return mixed
     */
    public function getMonthlyPayment($month, $id)
    {
        return StudentAdmissionPay::where('student_admission_id', $id)->whereMonth('date', Carbon::create($month)->month)
            ->whereYear('date', Carbon::create($month)->year)->get();
    }
}
