@extends('layouts.admin')
@section('title')
    Current Affair Create
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
            background: white!important;
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
        <h6 class="m-0 font-weight-bold text-primary">Create Current Affair</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.current.affairs.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group font-weight-bold">
                <label for="title">Title:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="title" placeholder="Enter Title">
            </div>

            <div class="form-group font-weight-bold">
                <label for="long_title">Long Title:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="long_title" placeholder="Enter Long Title">
            </div>

            <div class="form-group font-weight-bold">
                <label for="content">Current Affair Content:</label>
                <textarea name="content" id="editor1" style="border-radius: 20px;" class="form-control" placeholder="Enter content" ></textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="image">Upload Thumbnail: </label>
                <input type="file" class="form-control" name="image">
            </div>

            <div class="form-group font-weight-bold">
                <label for="year">Year: </label>
                <input type="text" class="form-control" name="year">
            </div>

            <div class="form-group font-weight-bold">
                <label for="type">Type: </label>
                <select name="type" id="type" class="form-control" required>
                    <option value="">Select Type</option>
                    <option value="current_affair">Current Affair</option>
                    <option value="article">Article</option>
                    <option value="assam_current_affair">Assam Current Affair</option>
                </select>
            </div>


            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace('editor1');
    </script>
@stop

