<?php

namespace App\Imports\StudentAnalysis;

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

class StudentAnalysis implements ToCollection,  WithHeadingRow, SkipsOnFailure, SkipsOnError
{
    use Importable, SkipsFailures, SkipsErrors;

    public function __construct(string $webinar_name)
    {
        $this->webinar_name = $webinar_name;
    }


    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
        foreach ($collection as $key => $row) {

            //check if the student exists
            $student = \App\StudentAnalysis::where('student_email', $row['student_email'])->first();

            if ($student){
                $student_analysis_webinar_count_data = [
                    'student_analysis_id' => $student->id,
                    'webinar_name' => $this->webinar_name,
                    'is_attended' => true,
                ];
                \App\StudentAnalysisWebinarCount::create($student_analysis_webinar_count_data);
            }else{
                $student_analysis_data = [
                    'student_name' => $row['student_name'],
                    'student_email' => $row['student_email'],
                    'student_phone' => $row['student_phone'],
                ];
                $student_analysis = \App\StudentAnalysis::create($student_analysis_data);

                $student_analysis_webinar_count_data = [
                    'student_analysis_id' => $student_analysis->id,
                    'webinar_name' => $this->webinar_name,
                    'is_attended' => true,
                ];
                \App\StudentAnalysisWebinarCount::create($student_analysis_webinar_count_data);
            }




        }

        return $collection;

    }
}
