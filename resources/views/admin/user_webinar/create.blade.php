@extends('layouts.admin')
@section('title')
    Class Test
@endsection

@section('links')

    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Test</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.user-webinar.counsellor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group font-weight-bold">
                <label for="name">Counsellor Name:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="name"
                       placeholder="Enter Counsellor Name">
            </div>

            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

        </form>
    </div>
@endsection

