@extends('layouts.admin')
@section('title')
Edit Admission Enquiries
@endsection
@section('links')
<link href="{{asset('css/form.css')}}" rel="stylesheet">
@endsection
@section('content')

<div class="py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Admission Enquiries</h6>
</div>
<hr>
<div class="container emp-profile mt-3">
    <form action="{{ route('admin.admissionenquiries.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="form-group font-weight-bold">
            <label for="test_name">Name:</label>
            <input type="text" style="border-radius: 20px;" class="form-control" name="name" value="{{$data->name}}">
        </div>

        <div class="form-group font-weight-bold">
            <label for="email">Email:</label>
            <input type="email" style="border-radius: 20px;" class="form-control" name="email" value="{{$data->email}}">
        </div>
        <div class="form-group font-weight-bold">
            <label for="phone">Phone Number:</label>
            <input type="text" style="border-radius: 20px;" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{$data->phone}}">
        </div>
        <div class="form-group font-weight-bold">
            <label for="address">Address:</label>
            <textarea type="text" style="border-radius: 20px;" class="form-control" name="address">{{$data->address}}</textarea>
        </div>
        <div class="form-group font-weight-bold">
            <label for="visitors">Number of visitors:</label>
            <input type="text" style="border-radius: 20px;" class="form-control" name="visitors" value="{{$data->visitors}}">
        </div>
        <div class="form-group font-weight-bold">
            <label for="source">Source:</label>
            <input type="text" style="border-radius: 20px;" class="form-control" name="source" value="{{$data->source}}">
        </div>
        <div class="form-group font-weight-bold">
            <label for="branch">Branch:</label>
            <select name="branch" id="branch" class="form-control">
                @if($data->branch === 'dibrugarh')
                <option value="dibrugarh" selected>Dibrugarh</option>
                @else
                <option value="guwahati" selected>Guwahati</option>
                @endif
            </select>
        </div>
        <br>
        <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

    </form>
</div>
@endsection