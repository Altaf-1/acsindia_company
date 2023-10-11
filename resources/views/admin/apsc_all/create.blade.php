@extends('layouts.admin')
@section('title')
Create Apsc Materials
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
    <h6 class="m-0 font-weight-bold text-primary">Create APSC ALL</h6>
</div>
<hr>
<div class="container emp-profile mt-3">
    <form action="{{ route('admin.apscall.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group font-weight-bold">
            <label for="name">Name:</label>
            <input type="text" style="border-radius: 20px;" class="form-control" name="name" placeholder="Enter Name" required>
        </div>
        <div class="form-group font-weight-bold">
            <label for="date">Date:</label>
            <input type="date" style="border-radius: 20px;" class="form-control" name="date" required>
        </div>
        <div class="form-group font-weight-bold">
            <label for="pdf">Course pdf:</label>
            <input type="file" name="pdf" id="pdf" required>
        </div>
        <br>
        <button class="btn button text-white" style="background: #fb770c" type="submit">Create</button>

    </form>
</div>
@endsection