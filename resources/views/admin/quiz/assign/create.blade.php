@extends('layouts.admin')
@section('title')
    New Quiz
@endsection

@section('links')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Quiz</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.assignquiz.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="quiz_id" value="{{ $id }}">
            <div class="form-group font-weight-bold">
                <label for="Status">Course:</label>
                <select id="status" class="form-control" name="course_name" required>
                    <option selected value="Probable Question">Probable Question</option>
                    <option selected value="Outside Course">Outside Course</option>
                    <option selected value="Free mock test">Free mock test</option>
                    @foreach ($apscs as $apsc)
                        <option value="{{ $apsc }}">{{ $apsc }}</option>
                    @endforeach
                    @foreach ($upscs as $upsc)
                        <option value="{{ $upsc }}">{{ $upsc }}</option>
                    @endforeach
                    @foreach ($recoreds as $record)
                        <option value="{{ $record }}">{{ $record }}</option>
                    @endforeach
                    @foreach ($studies as $study)
                        <option value="{{ $study }}">{{ $study }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

        </form>
    </div>
@endsection
