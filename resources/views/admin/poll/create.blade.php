@extends('layouts.admin')
@section('title')
    Create Poll
@endsection

@section('links')

    <link href="{{asset('css/form.css')}}" rel="stylesheet">
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create New Poll</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.poll.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group font-weight-bold">
                <label for="title">Title:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="title" placeholder="Enter title">
            </div>

            <div class="form-group font-weight-bold">
                <label for="question">Question:</label>
                <textarea id="editor1" class="form-control" style="border-radius: 20px;"  name="question" placeholder="Enter question"></textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="option_1">Option 1:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="option_1" placeholder="Enter option_1">
            </div>

            <div class="form-group font-weight-bold">
                <label for="option_2">Option 2:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="option_2" placeholder="Enter option_2">
            </div>

            <div class="form-group font-weight-bold">
                <label for="option_3">Option 3:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="option_3" placeholder="Enter option_3">
            </div>

            <div class="form-group font-weight-bold">
                <label for="option_4">Option 4:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="option_4" placeholder="Enter option_4">
            </div>

            <div class="form-group font-weight-bold">
                <label for="answer">Answer:</label>
                <select type="text" style="border-radius: 20px;" class="form-control" id="options" name="answer">
                    <option value="option_1">Option 1</option>
                    <option value="option_2">Option 2</option>
                    <option value="option_3">Option 3</option>
                    <option value="option_4">Option 4</option>
                </select>
            </div>

            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
         <script>
                        CKEDITOR.replace( 'editor1' );
                </script>
@endsection

