@extends('layouts.admin')
@section('title')
    Edit Products Code
@endsection

@section('links')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Code</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.products.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="form-group font-weight-bold">
                <label for="code">Code:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" value="{{ $data->code }}"
                    name="code" placeholder="Enter code">
            </div>
            <div class="form-group font-weight-bold">
                <label for="sold">Sold:</label>
                <select id="sold" class="form-control" name="sold">
                    <option value="{{ $data->sold }}" selected>{{ $data->sold ? 'Sold' : 'In-Stock' }}</option>
                    <option value="0">In-Stock</option>
                    <option value="1">Sold</option>
                </select>
            </div>
              <div class="form-group font-weight-bold">
                <label for="type">Type:</label>
                <select id="type" class="form-control" name="type" required>
                       <option value="{{ $data->type }}" selected>{{ $data->type  }}</option>
                    <option selected value="UPSC">UPSC</option>
                    <option value="APSC">APSC</option>
                </select>
            </div>

            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
@endsection
