@extends('layouts.admin')
@section('title')
    Event Create
@endsection

@section('links')
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Creating Event</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.event.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group font-weight-bold">
                <label for="title">Event Title:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="title"
                       placeholder="Enter Name">
            </div>

            <div class="form-group font-weight-bold">
                <label for="description">Event Description:</label>
                <textarea name="description" style="border-radius: 20px;" class="form-control"
                          placeholder="Enter Description"></textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="date">Date:</label>
                <input type="date" style="border-radius: 20px;" class="form-control" name="date"
                       placeholder="eg: 10 months, 1 year">
            </div>

            <div class="form-group font-weight-bold">
                <label for="start_time">Start Time:</label>
                <input type="time" style="border-radius: 20px;" class="form-control" name="start_time"
                       placeholder="Event Start Time">
            </div>

            <div class="form-group font-weight-bold">
                <label for="end_time">End Time:</label>
                <input type="time" style="border-radius: 20px;" class="form-control" name="end_time"
                       placeholder="Event End Time">
            </div>

            <div class="form-group font-weight-bold">
                <label for="venue">Event Venue:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="venue"
                       placeholder="Event Venue">
            </div>

            <div class="form-group font-weight-bold">
                <label for="image">Upload Thumbnail: </label>
                <input type="file" class="form-control" name="image">
            </div>


            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

        </form>
    </div>
@endsection

