@extends('layouts.admin')
@section('title')
    Edit New Tests
@endsection

@section('links')

    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Video</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.new_test_sub_topic.update', $heading->id) }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('patch')
            <input required type="text" class="form-control border-2 small"
                   name="sub_topic" placeholder="Sub Topic" value="{{$heading->sub_topic}}">
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

        </form>
    </div>
@endsection

