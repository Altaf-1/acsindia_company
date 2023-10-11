@extends('layouts.admin')
@section('title')
    Course Create
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
        <h6 class="m-0 font-weight-bold text-primary">Updating User</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.course.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group font-weight-bold">
                <label for="title">Course Title:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="title" placeholder="Enter Name">
            </div>

            <div class="form-group font-weight-bold">
                <label for="description">Course Description:</label>
                <textarea name="description" style="border-radius: 20px;" class="form-control" placeholder="Enter Description" ></textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="days">Total Months/Year:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="days" placeholder="eg: 10 months, 1 year">
            </div>

            <div class="form-group font-weight-bold">
                <label for="timing">Total Hours:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="timing" placeholder="eg: 10 hours, 2 hours">
            </div>

            <div class="form-group font-weight-bold">
                <label for="price">Price:</label>
                <input type="number" style="border-radius: 20px;" class="form-control" name="price" placeholder="Price of Course">
            </div>

            <div class="form-group font-weight-bold">
                <label for="sale">Sale Price:</label>
                <input type="number" style="border-radius: 20px;" class="form-control" name="sale" placeholder="Sale Price">
            </div>

            <div class="form-group font-weight-bold">
                <label for="discount">Discount:</label>
                <input type="number" style="border-radius: 20px;" class="form-control" name="discount" placeholder="percentenge value eg: 20, 30">
            </div>
            <div class="form-group font-weight-bold">
                <label for="url">Google Drive Shared Link: </label>
                <input type="text" class="form-control" name="url">
            </div>

            <div class="form-group font-weight-bold">
                <label for="image">Upload Thumbnail: </label>
                <input type="file" class="form-control" name="image">
            </div>
            
                <div class="form-group font-weight-bold">
                <label for="sequence">Sequence: </label>
                <input type="number" class="form-control"
                       name="sequence">
            </div>

             <div class="form-group font-weight-bold">
                <label for="image">Use Coupon: </label>
                <select name="use_coupon" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
@endsection

