@extends('layouts.admin')
@section('title')
    New Quiz
@endsection

@section('links')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Quiz</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.onlineQuiz.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group font-weight-bold">
                <label for="quiz_name">Name:</label>
                <input required type="quiz_name" style="border-radius: 20px;" class="form-control" name="quiz_name"
                    placeholder="Enter Name">
            </div>
            <div class="form-group font-weight-bold">
                <label for="quiz_date">Date:</label>
                <input required type="date" style="border-radius: 20px;" class="form-control  col-3" name="quiz_date"
                    placeholder="Enter date">
            </div>
            <div class="form-group font-weight-bold">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" placeholder="Enter description"
                    style="border-radius: 20px; resize:none;" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group font-weight-bold">
                <label for="Status">status:</label>
                <select id="status" class="form-control" name="status" required>
                    <option selected value="Active">Active</option>
                    <option value="De-Active">De-Active</option>
                </select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="pdf">PDF:</label>
                <input type="file" name="pdf" id="pdf" class="form-control">
            </div>
         
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

        </form>
    </div>
@endsection
