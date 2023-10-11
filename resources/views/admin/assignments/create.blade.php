@extends('layouts.admin')
@section('title')
New Assignment
@endsection

@section('links')

<link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

<div class="py-3">
    <h6 class="m-0 font-weight-bold text-primary">Create Assignment</h6>
</div>
<hr>
<div class="container emp-profile mt-3">
    <form action="{{ route('admin.assignments.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group font-weight-bold">
            <label for="course">Course Title:</label>
            <select id="cars" class="form-control" name="course">
                @foreach($courses as $course)
                <option value="{{$course->title}}">{{$course->title}}</option>
                @endforeach
                @foreach($apscs as $apsc)
                <option value="{{$apsc->title}}">{{$apsc->title}}</option>
                @endforeach
                @foreach($records as $record)
                <option value="{{$record->title}}">{{$record->title}}</option>
                @endforeach
                @foreach($studies as $study)
                <option value="{{$study->title}}">{{$study->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group font-weight-bold">
            <label for="type">Type:</label>
            <select id="type" class="form-control" name="type">
                <option value="ESSAY">ESSAY</option>
                <option value="GS-1">GS-1</option>
                <option value="GS-2">GS-2</option>
                <option value="GS-3">GS-3</option>
                <option value="GS-4">GS-4</option>
                <option value="GS-5">GS-5</option>
            </select>
        </div>

        <div class="form-group font-weight-bold">
            <label for="title">Title:</label>
            <input type="text" style="border-radius: 20px;" class="form-control" name="title" placeholder="Enter title">
        </div>

        <div class="form-group font-weight-bold">
            <label for="date">Week:</label>
            <input type="text" style="border-radius: 20px;" class="form-control" name="weak" placeholder="Enter weak">
            <!--<div class="row">-->
            <!--    <div class="col-3">-->
            <!--        <input type="date" style="border-radius: 20px;" class="form-control" name="date" placeholder="Enter date">-->

            <!--    </div>-->
            <!--</div>-->
        </div>

        <div class="form-group font-weight-bold">
            <label for="download">Pdf:</label>
            <input type="file" style="border-radius: 20px;" class="form-control" name="pdf">
        </div>

    <div class="form-group font-weight-bold">
                <label for="image">Active: </label> <select name="is_active" class="form-control">
                    <option selected value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
        <br>
        <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

    </form>
</div>
@endsection