<?php

namespace App\Exports;

use App\StudentAnalysis;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentAnalysisExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return StudentAnalysis::join('student_analysis_webinar_counts', 'student_analysis_webinar_counts.student_analysis_id', '=', 'student_analyses.id')
            ->select(
                'student_analyses.student_name',
                'student_analyses.student_email',
                'student_analyses.student_phone',
                DB::raw('group_concat(student_analysis_webinar_counts.webinar_name) as webinar_name'),
                DB::raw('count(student_analysis_webinar_counts.webinar_name) as webinar_attendance')
            )
            ->groupBy('student_analyses.student_name', 'student_analyses.student_email', 'student_analyses.student_phone')->get();
    }

    public function headings(): array
    {
        return [
            'Student Name',
            'Student Phone',
            'Student Email',
            'Webinars Attended',
            'Webinars Present Count',
            'Counsellor',
        ];
    }

    public function map($row): array
    {
        return [
            $row->student_name,
            $row->student_phone,
            $row->student_email,
            $row->webinar_name,
            $row->webinar_attendance,
            $row->getCounsellor($row->student_email, $row->student_phone)
        ];
    }
}
