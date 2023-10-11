@extends('layouts.admin')
@section('title')
    Edit New Video
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
        <form action="{{ route('admin.new_video.update', $video->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group font-weight-bold">
                <label for="topic">Course Title:</label>
                <select  class="form-control"  name="topic">
                    <option value="{{$video->topic}}" selected>{{$video->topic}}</option>
                    <option value="Main">Main</option>
                    <option value="Prelims" >Prelims</option>
                </select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="sub_topic">Course Title:</label>
                <select class="form-control"  name="sub_topic">
                    <option value="{{$video->sub_topic}}" selected>{{$video->sub_topic}}</option>
                @foreach($subtopics as $subtopic)
                        <option value="{{$subtopic->sub_topic}}">{{$subtopic->sub_topic}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="course">Course Title:</label>
                <select id="cars" class="form-control"  name="course">
                    <option selected value="{{$video->course}}">{{$video->course}}</option>
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
                <input type="text" style="border-radius: 20px;" class="form-control" value="{{$video->title}}" name="title" placeholder="Enter title">
            </div>

            <div class="form-group font-weight-bold">
                <label for="date">Date:</label>
                <input type="date" style="border-radius: 20px;" class="form-control" value="{{date("Y-m-d", strtotime($video->date))}}" name="date" placeholder="Enter date">
            </div>

            <div class="form-group font-weight-bold">
                <label for="video">Video Link:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" value="{{$video->video}}" name="video" placeholder="Enter video link">
            </div>

            <div class="form-group font-weight-bold">
                <label for="knowledge">Knowledge Link:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" value="{{$video->knowledge}}" name="knowledge" placeholder="Enter knowledge check link">
            </div>

            <div class="form-group font-weight-bold">
                <label for="download">Download Material Link:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" value="{{$video->download}}" name="download" placeholder="Enter download material">
            </div>


            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
@endsection

