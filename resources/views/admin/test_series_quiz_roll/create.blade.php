@extends('layouts.admin')
@section('title')
    New Quiz
@endsection

@section('links')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Quiz</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.testseriesquizroll.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group font-weight-bold">
                <label for="quiz_name">Name:</label>
                <input required type="quiz_name" style="border-radius: 20px;" class="form-control" name="quiz_name"
                    placeholder="Enter Name">
            </div>
            <div class="form-group font-weight-bold">
                <label for="Status">status:</label>
                <select id="status" class="form-control" name="status" required>
                    <option selected value="Active">Active</option>
                    <option value="De-Active">De-Active</option>
                </select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="set">SET:</label>
                <select id="set" class="form-control" name="set" required>
                    <option selected value="">Select any one</option>
                    <option selected value="SET A">SET A</option>
                    <option value="SET B">SET B</option>
                    <option value="SET C">SET C</option>
                    <option value="SET D">SET D</option>
                </select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="type">Paper:</label>
                <select id="type" class="form-control" name="type" required>
                    <option selected value="">Select any one</option>
                    <option value="Paper 1">Paper 1</option>
                    <option value="Paper 2">Paper 2</option>
                </select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="pdf">File:</label>
                <input type="file" required style="border-radius: 20px;" value="{{ old('pdf') }}"
                    class="form-control @error('pdf') is-invalid @enderror" name="pdf" placeholder="Enter Phone">
                @error('pdf')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

        </form>
    </div>
@endsection
