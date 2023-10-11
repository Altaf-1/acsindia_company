@extends('layouts.admin')
@section('title')
    Create Faculty Poll
@endsection
@section('links')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create New Poll</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.faculty_poll.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group font-weight-bold">
                <label for="poll_name">Title:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="poll_name"
                    placeholder="Enter title">
            </div>
            <div class="form-group font-weight-bold">
                <label for="poll_description">Description:</label>
                <textarea id="editor1" class="form-control" style="border-radius: 20px;" name="poll_description"
                    placeholder="Enter ..."></textarea>
            </div>
            <div class="form-group font-weight-bold">
                <label for="status">Status:</label>
                <select type="text" style="border-radius: 20px;" class="form-control" name="status">
                    <option value="0">Not active</option>
                    <option value="1">Active</option>
                </select>
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

        </form>
    </div>
    <script>
        CKEDITOR.replace('editor1');
    </script>
@endsection
