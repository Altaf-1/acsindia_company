@extends('layouts.admin')
@section('title')
    Edit {{$event->title}}
@endsection

@section('links')

    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Updating Event {{$event->title}}</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group font-weight-bold">
                <label for="title">Course Title:</label>
                <input type="text" value="{{$event->title}}" style="border-radius: 20px;" class="form-control" name="title" placeholder="Enter Name">
            </div>

            <div class="form-group font-weight-bold">
                <label for="description">Course Description:</label>
                <textarea name="description" style="border-radius: 20px;" class="form-control" placeholder="Enter Description" >{{$event->description}} </textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="date">Date:</label>
                <input type="date" value="{{$event->date}}" style="border-radius: 20px;" class="form-control" name="date" placeholder="Event date">
            </div>

            <div class="form-group font-weight-bold">
                <label for="start_time">Start Time:</label>
                <input type="time" value="{{$event->start_time}}" style="border-radius: 20px;" class="form-control" name="start_time" placeholder="eg: 10 hours, 2 hours">
            </div>

            <div class="form-group font-weight-bold">
                <label for="end_time">End Time:</label>
                <input type="time" value="{{$event->end_time}}" style="border-radius: 20px;" class="form-control" name="end_time" placeholder="Price of Course">
            </div>

            <div class="form-group font-weight-bold">
                <label for="venue">Event Venue:</label>
                <input type="text" value="{{$event->venue}}" style="border-radius: 20px;" class="form-control" name="venue" placeholder="Sale Price">
            </div>



            <div class="form-group font-weight-bold">
                <label for="image">Upload Thumbnail: </label>
                <input type="file" class="form-control" name="image">
            </div>


            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Update</button>

        </form>
    </div>
@endsection

