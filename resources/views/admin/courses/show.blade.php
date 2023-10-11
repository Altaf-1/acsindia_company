@extends('layouts.admin')
@section('title')
    {{$course->title}}
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
        <h6 class="m-0 font-weight-bold text-primary">Course Name: {{$course->title}}</h6>
    </div>
    <hr>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group font-weight-bold">
                    <label for="title">Course Title:</label>
                    <p class="showData">{{$course->title}}</p>
                </div>

                <div class="form-group font-weight-bold">
                    <label for="description">Course Description:</label>
                    <p class="showData">{{$course->description}}</p>
                </div>

                <div class="form-group font-weight-bold">
                    <label for="date">Total Months/Year:</label>
                    <p class="showData">{{$course->days}}</p>
                </div>
                <div class="form-group font-weight-bold">
                    <label for="timing">Total Hours:</label>
                   <p class="showData">{{$course->timing}}</p>
                </div>

                <div class="form-group font-weight-bold">
                    <label for="price">Price:</label>
                    <p class="showData">{{$course->price}}</p>
                </div>

                <div class="form-group font-weight-bold">
                    <label for="sale">Sale Price:</label>
                    <p class="showData">{{$course->sale}}</p>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <img src="{{asset('storage/'.$course->image)}}" width="70%" alt="">
            </div>
        </div>


    </div>
@endsection

