@extends('layouts.admin')
@section('title')
    Study Material Course Create
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
        <h6 class="m-0 font-weight-bold text-primary">Create Study Material Course</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.studymaterial.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group font-weight-bold">
                <label for="title">Course Title:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="title"
                       placeholder="Enter Name" required>
            </div>

            <div class="form-group font-weight-bold">
                <label for="description">Course Description:</label>
                <textarea name="description" style="border-radius: 20px;" class="form-control"
                          placeholder="Enter Description" required></textarea>
            </div>


            <div class="form-group font-weight-bold">
                <label for="price">Price:</label>
                <input type="number" style="border-radius: 20px;" class="form-control" name="price"
                       placeholder="Price of Course" required>
            </div>


            <div class="form-group font-weight-bold">
                <label for="options">Front Options: </label>
                <textarea class="form-control" name="front_options"
                          PLACEHOLDER="<li><i class='fas fa-check-circle'></i> Daily Q&A session.</li>" required></textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="options">Options: </label>
                <textarea class="form-control" name="options"
                          PLACEHOLDER="<li><i class='fas fa-check-circle'></i> Daily Q&A session.</li>" required></textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="sequence">Sequence: </label>
                <input type="number" class="form-control"
                       name="sequence">
            </div>

            <div class="form-group font-weight-bold">
                <label for="image">Upload Thumbnail: </label>
                <input type="file" class="form-control" name="image" required>
            </div>

            <div class="form-group font-weight-bold">
                <label for="use_coupon">Use Coupon: </label>
                <select name="use_coupon" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="form-group font-weight-bold">
                <label for="is_gst">Gst Applicable: </label>
                <select name="is_gst" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>



            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

        </form>
    </div>
@endsection

