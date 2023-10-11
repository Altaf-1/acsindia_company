@extends('layouts.admin')
@section('title')
    Coupon Create
@endsection

@section('links')

    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Coupon</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.coupon.bulk_coupon_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group font-weight-bold">
                <label for="coupon_code">Coupon Code:</label>
                <input type="text" style="border-radius: 20px;" class="form-control @error('coupon_code') is-invalid @enderror" name="coupon_code" placeholder="Enter code">
                @error('coupon_code')
                <div class="invalid-feedback mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="form-group font-weight-bold">
                <label for="coupon_discount">Discount:</label>
                <input type="number" style="border-radius: 20px;" class="form-control @error('coupon_discount') is-invalid @enderror" name="coupon_discount" placeholder="Enter discount 1 to 100">
                @error('coupon_discount')
                <div class="invalid-feedback mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="form-group font-weight-bold">
                <label for="user_excel">Upload Excel:</label>
                <input type="file" style="border-radius: 20px;" class="form-control @error('user_excel')
                is-invalid @enderror" name="user_excel" placeholder="Enter Excel">
                @error('user_excel')
                <div class="invalid-feedback mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>


            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
@endsection

