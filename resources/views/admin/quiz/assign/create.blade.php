@extends('layouts.admin')
@section('title')
New Quiz
@endsection

@section('links')

<link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

<div class="py-3">
    <h6 class="m-0 font-weight-bold text-primary">Create Quiz</h6>
</div>
<hr>
<div class="container emp-profile mt-3">
    <form action="{{ route('admin.assignquiz.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="quiz_id" value="{{$id}}">
        <div class="form-group font-weight-bold">
            <label for="Status">Course:</label>
            <select id="status" class="form-control" name="course_name" required>
                @foreach($apscs as $apsc)
                <option selected value="{{$apsc}}">{{$apsc}}</option>
                @endforeach
                @foreach($upscs as $upsc)
                <option selected value="{{$upsc}}">{{$upsc}}</option>
                @endforeach
                @foreach($recoreds as $record)
                <option selected value="{{$record}}">{{$record}}</option>
                @endforeach
                @foreach($studies as $study)
                <option selected value="{{$study}}">{{$study}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

    </form>
</div>
@endsection