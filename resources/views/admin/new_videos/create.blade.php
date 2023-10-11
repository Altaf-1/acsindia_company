@extends('layouts.admin')
@section('title')
    New Video
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
        <form action="{{ route('admin.new_video.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group font-weight-bold">
                <label for="topic">Course Topic:</label>
                <select class="form-control"  name="topic">
                    <option value="Main" selected>Main</option>
                    <option value="Prelims" >Prelims</option>
                </select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="sub_topic">Course Sub Topic:</label>
                <select class="form-control"  name="sub_topic">
                    @foreach($subtopics as $subtopic)
                        <option value="{{$subtopic->sub_topic}}">{{$subtopic->sub_topic}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="course">Course Title:</label>
                <select id="cars" class="form-control"  name="course">
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
                <label for="date">Date:</label>
                <input type="date" style="border-radius: 20px;" class="form-control"  name="date" placeholder="Enter date">
            </div>

            <div class="form-group font-weight-bold">
                <label for="title">Title:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="title" placeholder="Enter title">
            </div>

            <div class="form-group font-weight-bold">
                <label for="video">Video Link:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="video" placeholder="Enter video link">
            </div>

            <div class="form-group font-weight-bold">
                <label for="knowledge">Knowledge Link:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="knowledge" placeholder="Enter knowledge check link">
            </div>

            <div class="form-group font-weight-bold">
                <label for="download">Download Material Link:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="download" placeholder="Enter download material">
            </div>


            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
@endsection

