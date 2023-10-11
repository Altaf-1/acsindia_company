@extends('layouts.admin')
@section('title')
    Personal Mentorship
@endsection
@section('content')
    <div class="container">
        <form class="bg-primary p-5" action="{{ route('admin.personalmentor.update', $data->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Monday" name="day1" value="{{ $data->day1 }}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Tuesday" name="day2" value="{{ $data->day2 }}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Wednesday" name="day3"
                    value="{{ $data->day3 }}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Thusday" name="day4" value="{{ $data->day4 }}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Friday" name="day5" value="{{ $data->day5 }}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Saturday" name="day6"
                    value="{{ $data->day6 }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
