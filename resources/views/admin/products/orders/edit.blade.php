@extends('layouts.admin')
@section('title')
    Edit Products
@endsection

@section('links')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.products.orders.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            {{-- <div class="form-group font-weight-bold">
                <label for="product_id">Product:</label>
                <select id="product_id" class="form-control" name="product_id" required>
                    <option value="{{ $data->product_id }}">{{ $data->product->code }}</option>
                    @foreach ($products as $product)
                        <option selected value="{{ $product->id }}">{{ $product->code }}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="form-group font-weight-bold">
                <label for="code">Code:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="code"
                    placeholder="Enter code" value="{{ $data->product->code }}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="name">Name:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="name"
                    placeholder="Enter name" value="{{ $data->name }}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="email">Email:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="email"
                    placeholder="Enter email" value="{{ $data->email }}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="phone">Phone:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="phone"
                    placeholder="Enter phone" value="{{ $data->phone }}">
            </div>

            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
@endsection
