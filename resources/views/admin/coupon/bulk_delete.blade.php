@extends('layouts.admin')
@section('title')
    Coupon Delete
@endsection

@section('links')

    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Delete Coupon</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.coupon.bulk_coupon_delete') }}" method="POST">
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


            <br>
            <button class="btn-danger" type="submit">DELETE</button>

        </form>
    </div>
@endsection

