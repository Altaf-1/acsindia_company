@extends('layouts.admin')
@section('title')
    Edit {{$event->title}}
@endsection
@section('styles')
    <style>
        .showData{
            background-color: #fdf5ee;
            padding: .2rem .2rem .2rem .5rem;
            color: #ec5114;
            border-radius: .51rem;
        }
    </style>
@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Event Name: {{$event->title}}</h6>
    </div>
    <hr>
    <div class="container mt-3">
          <div class="row">
              <div class="col-sm-6">
                  <div class="form-group font-weight-bold">
                      <label for="title">Event Title:</label>
                      <p class="showData">{{$event->title}}</p>
                  </div>

                  <div class="form-group font-weight-bold">
                      <label for="description">Event Description:</label>
                      <p class="showData">{{$event->description}}</p>
                  </div>

                  <div class="form-group font-weight-bold">
                      <label for="date">Date:</label>
                      <p class="showData">{{$event->date}}</p>
                  </div>

                  <div class="form-group font-weight-bold">
                      <label for="start_time">Start Time:</label>
                      <p class="showData">{{$event->start_time}}</p>
                  </div>

                  <div class="form-group font-weight-bold">
                      <label for="end_time">End Time:</label>
                      <p class="showData">{{$event->end_time}}</p>
                  </div>

                  <div class="form-group font-weight-bold">
                      <label for="venue">Event Venue:</label>
                      <p class="showData">{{$event->venue}}</p>
                  </div>
              </div>
              <div class="col-sm-6 text-center">
                  <img src="{{asset('storage/'.$event->image)}}" width="70%" alt="">
              </div>
          </div>


    </div>
@endsection

