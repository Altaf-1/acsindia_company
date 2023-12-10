@extends('layouts.admin')
@section('title')
Edit quiz
@endsection

@section('links')

<link href="{{asset('css/form.css')}}" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
            <input type="quiz_name" style="border-radius: 20px;" class="form-control" value="{{$data->quiz_name}}"
                name="quiz_name" placeholder="Enter Name">
        </div>
        <div class="form-group font-weight-bold">
            <label for="quiz_date">Date:</label>
            <input type="date" style="border-radius: 20px;" class="form-control" value="{{$data->quiz_date}}"
                name="quiz_date" placeholder="Enter date">
        </div>
        <div class="form-group font-weight-bold">
            <label for="description">Description:</label>
            <textarea name="description" id="" cols="30" class="form-control" rows="5"
                style="resize: none;">{{$data->description}}</textarea>
        </div>
        <div class="form-group font-weight-bold">
            <label for="Status">status:</label>
            <select id="status" class="form-control" name="status">
                <option value="{{$data->status}}" selected>{{$data->status}}</option>
                <option value="Active">Active</option>
                <option value="De-Active">De-Active</option>
            </select>
        </div>
        <div class="form-group font-weight-bold">
            <label for="total_time">END Time:</label>
            <input type="time" style="border-radius: 20px;" class="form-control  col-3" name="total_time"
                value="{{$data->total_time}}">
        </div>
        <br>
        <button class="btn button text-white" style="background: #fb770c" type="submit">Update</button>

    </form>
</div>
@stop
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endsection