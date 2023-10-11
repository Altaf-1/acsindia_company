<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentAnalysisWebinarCount extends Model
{
    //
    protected $fillable = [
        'student_analysis_id',
        'webinar_name',
        'is_attended',
    ];

    public function studentAnalysis(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(StudentAnalysis::class);
    }
}
