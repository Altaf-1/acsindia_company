@extends('layouts.admin')
@section('title')
    New Assignment
@endsection

@section('links')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Assignment</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.assignments.addResult', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <input type="hidden" name="course" value="{{ $course }}">
            <div class="form-group font-weight-bold">
                <label for="result">File:</label>
                <input type="file" style="border-radius: 20px;" class="form-control" name="result">
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>
        </form>
    </div>
@endsection
