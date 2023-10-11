@extends('layouts.admin')
@section('title')
Edit Apsc Material {{$course->title}}
@endsection

@section('links')

<link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('style')
<style>
    .header {
        position: absolute;
        top: -14px;
        left: 1%;
        padding: 0% 2px;
        margin: 0%;
        background: white !important;
    }

    .borderdiv {
        position: relative;
        padding: 32px;
        border-radius: 10px;
        border: 2px solid #75b3e2;
        margin-top: 2rem;
    }
</style>
@endsection
@section('content')

<div class="py-3">
    <h6 class="m-0 font-weight-bold text-primary">Updating Course {{$course->title}}</h6>
</div>
<hr>
<div class="container emp-profile mt-3">
    <form action="{{ route('admin.apscall.update', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group font-weight-bold">
            <label for="name">Name:</label>
            <input type="text" value="{{$course->name}}" style="border-radius: 20px;" class="form-control" name="name" placeholder="Enter Name">
        </div>
        <div class="form-group font-weight-bold">
            <label for="date">Date:</label>
            <input type="date" value="{{$course->date}}" style="border-radius: 20px;" class="form-control" name="date" placeholder="Enter date">
        </div>
        <div class="form-group font-weight-bold">
            <label for="image">Upload Thumbnail: </label>
            <input type="file" class="form-control" name="image">
        </div>

        <br>
        <button class="btn button text-white" style="background: #fb770c" type="submit">Update</button>

    </form>
</div>
@endsection