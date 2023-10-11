@extends('layouts.admin')
@section('title')
Edit New Video
@endsection

@section('links')

<link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

<div class="py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Sub Topic</h6>
</div>
<hr>
<div class="container emp-profile mt-3">
    <form action="{{ route('admin.new_video_sub_topic.update', $video->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="form-group font-weight-bold">
            <label for="title">Sub Topic:</label>
            <input type="text" style="border-radius: 20px;" class="form-control" value="{{$video->sub_topic}}" name="sub_topic" placeholder="Enter title">
        </div>

        <br>
        <button class="btn button text-white" style="background: #fb770c" type="submit">Update</button>

    </form>
</div>
@endsection