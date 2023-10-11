@extends('layouts.admin')
@section('title')
    Referral Code Edit
@endsection

@section('links')

    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Referral Code</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.referralcode.update', $refer_code->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group font-weight-bold">
                <label for="refer_code">Referral Code:</label>
                <input type="text" style="border-radius: 20px;"
                       class="form-control @error('refer_code')
                 is-invalid @enderror"
                          value="{{ $refer_code->refer_code }}"
                       name="refer_code" placeholder="Enter code">
                @error('refer_code')
                <div class="invalid-feedback mt-2" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>


            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Update
            </button>

        </form>
    </div>
@endsection

