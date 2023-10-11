@extends('layouts.admin')
@section('title')
    Edit New Tests
@endsection

@section('links')

    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Video</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.new_test.update', $test->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group font-weight-bold">
                <label for="topic">Course Title:</label>
                <select  class="form-control"  name="topic">
                    <option value="{{$test->topic}}" selected>{{$test->topic}}</option>
                    <option value="Main">Main</option>
                    <option value="Prelims" >Prelims</option>
                </select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="sub_topic">Course Title:</label>
                <select class="form-control"  name="sub_topic">
                    <option value="{{$test->sub_topic}}" selected>{{$test->sub_topic}}</option>
                @foreach($subtopics as $subtopic)
                        <option value="{{$subtopic->sub_topic}}">{{$subtopic->sub_topic}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="course">Course Title:</label>
                <select id="cars" class="form-control"  name="course">
                    <option selected value="{{$test->course}}">{{$test->course}}</option>
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
                <label for="title">Title:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" value="{{$test->title}}" name="title" placeholder="Enter title">
            </div>

            <div class="form-group font-weight-bold">
                <label for="date">Date:</label>
                <input type="date" style="border-radius: 20px;" class="form-control" name="date" value="{{$test->date}}"
                >
            </div>
            <div class="form-group font-weight-bold">
                <label for="duration">Duration:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="duration" value="{{$test->duration}}"
                >
            </div>
            <div class="form-group font-weight-bold">
                <label for="total_marks">Test Total Marks:</label>
                <input type="text" style="border-radius: 20px;" class="form-control"  value="{{$test->total_marks}}" name="total_marks" >
            </div>
            <div class="form-group font-weight-bold">
                <label for="note">Note:</label>
                <textarea  style="border-radius: 20px;" class="form-control" name="note" placeholder="Enter video link">{{$test->note}}</textarea>
            </div>
            <div class="form-group font-weight-bold">
                <label for="link">Test Link:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" value="{{$test->title}}" name="link" >
            </div>

            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
@endsection

