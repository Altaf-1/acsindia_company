@extends('layouts.admin')
@section('title')
Edit quiz
@endsection

@section('links')

<link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

<div class="py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Quiz</h6>
</div>
<hr>

<div class="container emp-profile mt-3">
    <form action="{{ route('admin.quiz.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group font-weight-bold">
            <label for="quiz_name">Name:</label>
            <input type="quiz_name" style="border-radius: 20px;" class="form-control" value="{{$data->quiz_name}}" name="quiz_name" placeholder="Enter Name">
        </div>
        <div class="form-group font-weight-bold">
            <label for="quiz_date">Date:</label>
            <input type="date" style="border-radius: 20px;" class="form-control" value="{{$data->quiz_date}}" name="quiz_date" placeholder="Enter date">
        </div>
        <div class="form-group font-weight-bold">
            <label for="description">Description:</label>
            <input type="text" style="border-radius: 20px;" class="form-control" value="{{$data->description}}" name="description" placeholder="Enter description">
        </div>
        <div class="form-group font-weight-bold">
            <label for="Status">status:</label>
            <select id="status" class="form-control" name="course">
                <option selected value="{{$data->status}}" selected>{{$data->status}}</option>
                <option selected value="active">Active</option>
                <option value="de-active">De-Active</option>
            </select>
        </div>
        <br>
        <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

    </form>
</div>
@endsection