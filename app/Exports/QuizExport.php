<?php

namespace App\Exports;

use App\QuizResult;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class QuizExport  implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return QuizResult::all();
    }

    public function headings(): array
    {
        return [
            'Student',
            'Email',
            'UIN',
            'Quiz',
            'Course',
            'Correct',
            'Wrong',
            'Total'
        ];
    }

    public function map($row): array
    {
        return [
            $row->user->name,
            $row->user->email,
            $row->user->id,
            $row->quiz->quiz_name,
            $row->course_name,
            $row->correct_answers,
            $row->wrong_answers,
            $row->total_mark,
        ];
    }
}
