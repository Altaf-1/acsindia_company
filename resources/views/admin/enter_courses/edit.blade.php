@extends('layouts.admin')
@section('title')
    Edit Enter Courses
@endsection
@section('links')
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Course</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.entercourse.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="form-group font-weight-bold">
                <label for="course_name">Course Name:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="course_name"
                       value="{{$data->course_name}}">
            </div>

            <div class="form-group font-weight-bold">
                <label for="time">Time:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="time"
                       value="{{$data->time}}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="start_date">Start Date:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="start_date"
                       placeholder="Enter Phone Number" value="{{$data->start_date}}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="fee_GST">Fee + GST:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="fee_GST"
                       value="{{$data->fee_GST}}">
            </div>

            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
@endsection

