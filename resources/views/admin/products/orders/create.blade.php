@extends('layouts.admin')
@section('title')
    Products
@endsection

@section('links')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.products.orders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <div class="form-group font-weight-bold">
                <label for="product_id">Product:</label>
                <select id="product_id" class="form-control" name="product_id" required>
                    <option value="">Select</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->code }}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="form-group font-weight-bold">
                <label for="code">Code:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="code"
                    placeholder="Enter Code" required>
            </div>
            <div class="form-group font-weight-bold">
                <label for="name">Name:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="name"
                    placeholder="Enter name" required>
            </div>
            <div class="form-group font-weight-bold">
                <label for="email">Email:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="email"
                    placeholder="Enter email" required>
            </div>
            <div class="form-group font-weight-bold">
                <label for="phone">Phone:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="phone"
                    placeholder="Enter phone" required>
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Save</button>

        </form>
    </div>
@endsection
