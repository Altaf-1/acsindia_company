@extends('layouts.admin')
@section('title')
    Edit Personal Mentorship
@endsection
@section('links')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.personalmentor.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group font-weight-bold">
                <label for="course_name">Course Name:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" value="{{ $data->course_name }}"
                    name="course_name" placeholder="Enter">
            </div>

            <div class="form-group font-weight-bold">
                <label for="day1">Day 1:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="day1"
                    value="{{ $data->day1 }}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="day2">Day 2:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="day2"
                    value="{{ $data->day2 }}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="day3">Day 3:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="day3"
                    value="{{ $data->day3 }}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="day4">Day 4:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="day4"
                    value="{{ $data->day4 }}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="day5">Day 5:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="day5"
                    value="{{ $data->day5 }}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="day6">Day 6:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="day6"
                    value="{{ $data->day6 }}">
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Update</button>

        </form>
    </div>
@endsection
