<?php

namespace App\Exports\userDetails;

use App\ApscCourses;
use App\Course;
use App\Recorded;
use App\StudyMaterial;
use App\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class userDetailsExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings
{
    private $course;

    public function __construct(String $course)
    {
        $this->course = $course;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->course == 'upsc') {
            return DB::table('course_user')->get();
        } elseif ($this->course == 'apsc') {
            return DB::table('apsc_courses_user')->get();
        } elseif ($this->course == 'study_material') {
            return DB::table('study_material_user')->get();
        } elseif ($this->course == 'recorded') {
            return DB::table('recorded_user')->get();
        }
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Phone No.',
            'District',
            'State',
            'Postal Address',
            // 'Tracking Status',
            // 'Invoice',
            'Course Title',
            'Purchased at',
        ];
    }

    public function map($row): array
    {
        $user = User::where('id', $row->user_id)->get()->first();
        return [

            $user ? $user->name : "",
            $user ? $user->email : "",
            $user ? $user->phone : "",
            $user ? $user->district : "",
            $user ? $user->state : "",
            $user ? $user->postal : "",
            $this->course == 'upsc' ?
                Course::where('id', $row->course_id)->get()->first()->title : "",
            $this->course == 'apsc' ?
                ApscCourses::where('id', $row->apsc_courses_id)->get()->first()->title : "",
            $this->course == 'study_material' ?
                StudyMaterial::where('id', $row->study_material_id)->get()->first()->title : "",
            $this->course == 'recorded' ?
                Recorded::where('id', $row->recorded_id)->get()->first()->title : "",
            $row->created_at,
        ];
    }
}
