@extends('layouts.admin')
@section('title')
    Edit {{$course->title}}
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
        <h6 class="m-0 font-weight-bold text-primary">Updating Course {{$course->title}}</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.studymaterial.update', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group font-weight-bold">
                <label for="title">Course Title:</label>
                <input type="text" value="{{$course->title}}" style="border-radius: 20px;" class="form-control" name="title" placeholder="Enter Name">
            </div>

            <div class="form-group font-weight-bold">
                <label for="description">Course Description:</label>
                <textarea name="description" style="border-radius: 20px;" class="form-control" placeholder="Enter Description" >{{$course->description}} </textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="description">Status:</label>
                <select type="number" name="active">
                    <option value="1">Active</option>
                    <option value="0">Non Active</option>
                </select>
            </div>

            <div class="form-group font-weight-bold">
                <label for="price">Price:</label>
                <input type="number" value="{{$course->price}}" style="border-radius: 20px;" class="form-control" name="price" placeholder="Price of Course">
            </div>

            <div class="form-group font-weight-bold">
                <label for="url">Front Options: </label>
                <textarea type="text" class="form-control" name="front_options" >{{$course->options }}</textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="url">Options: </label>
                <textarea type="text" class="form-control" name="options" >{{$course->options }}</textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="sequence">Sequence: </label>
                <input type="number" class="form-control"
                       value="{{$course->sequence}}"
                       name="sequence">
            </div>

            <div class="form-group font-weight-bold">
                <label for="image">Upload Thumbnail: </label>
                <input type="file" class="form-control" name="image">
            </div>

            <div class="form-group font-weight-bold">
                <label for="image">Use Coupon: </label>
                <select name="use_coupon" class="form-control">
                    <option
                        @if($course->use_coupon == 1)
                            selected
                        @endif
                        value="1">Yes</option>
                    <option
                        @if($course->use_coupon == 0)
                            selected
                        @endif
                        value="0">No</option>
                </select>
            </div>

            <div class="form-group font-weight-bold">
                <label for="is_gst">Gst Applicable: </label>
                <select name="is_gst" class="form-control">
                    <option
                        @if($course->is_gst == 1)
                            selected
                        @endif
                        value="1">Yes</option>
                    <option
                        @if($course->is_gst == 0)
                            selected
                        @endif
                        value="0">No</option>
                </select>
            </div>


            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Update</button>

        </form>
    </div>
@endsection

