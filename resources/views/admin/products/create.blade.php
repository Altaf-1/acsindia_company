@extends('layouts.admin')
@section('title')
    Products Code
@endsection

@section('links')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Code</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group font-weight-bold">
                <label for="code">Code:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="code"
                    placeholder="Enter code">
            </div>
              <div class="form-group font-weight-bold">
                <label for="type">Type:</label>
                <select id="type" class="form-control" name="type" required>
                    <option selected value="UPSC">UPSC</option>
                    <option value="APSC">APSC</option>
                </select>
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Generate</button>

        </form>
    </div>
@endsection
