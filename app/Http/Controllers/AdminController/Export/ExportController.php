<?php

namespace App\Http\Controllers\AdminController\Export;

use App\Exports\QuizExport;
use App\Exports\StudentAnalysisExport;
use App\Exports\TestSeriesQuizExport;
use App\Exports\userDetails\userDetailsExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function upscExport()
    {
        return Excel::download(new userDetailsExport('upsc'), 'upscdetails.xlsx');
    }
    public function apscExport()
    {
        return Excel::download(new userDetailsExport('apsc'), 'apscdetails.xlsx');
    }
    public function studyMaterialExport()
    {
        return Excel::download(new userDetailsExport('study_material'), 'studymaterialdetails.xlsx');
    }
    public function recordedExport()
    {
        return Excel::download(new userDetailsExport('recorded'), 'recordeddetails.xlsx');
    }

    public function quizExport()
    {
        return Excel::download(new QuizExport(), 'quiz-result.xlsx');
    }

    public function testSeriesQuizExport()
    {
        return Excel::download(new TestSeriesQuizExport(), 'test-series-quiz-result.xlsx');
    }

    public function studentAnalysis()
    {
        return Excel::download(new StudentAnalysisExport(), 'student-analysis.xlsx');
    }
}
