@extends('layouts.admin')
@section('title')
    New Tests
@endsection
@section('links')
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Video</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.new_test.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group font-weight-bold">
                <label for="topic">Topic:</label>
                <select class="form-control"  name="topic">
                    <option value="Main" selected>Main</option>
                    <option value="Prelims" >Prelims</option>
                </select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="sub_topic">Sub Topic:</label>
                <select class="form-control"  name="sub_topic">
                    @foreach($subtopics as $subtopic)
                        <option value="{{$subtopic->id}}">{{$subtopic->sub_topic}}</option>
                    @endforeach
                </select>
            </div>
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
                </select>
            </div>

            <div class="form-group font-weight-bold">
                <label for="title">Test Title:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="title"
                       placeholder="Enter title">
            </div>

            <div class="form-group font-weight-bold">
                <label for="date">Date:</label>
                <input type="date" style="border-radius: 20px;" class="form-control" name="date"
                       placeholder="Enter Date">
            </div>
            <div class="form-group font-weight-bold">
                <label for="duration">Duration:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="duration"
                       placeholder="Example: 2 hrs,4 hrs">
            </div>
            <div class="form-group font-weight-bold">
                <label for="total_marks">Test Total Marks:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="total_marks" placeholder="Enter marks">
            </div>
            <div class="form-group font-weight-bold">
                <label for="note">Note:</label>
                <textarea  style="border-radius: 20px;" class="form-control" name="note" placeholder="Enter Note"></textarea>
            </div>
            <div class="form-group font-weight-bold">
                <label for="link">Test Link:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="link" placeholder="Enter video link">
            </div>

            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
@endsection

