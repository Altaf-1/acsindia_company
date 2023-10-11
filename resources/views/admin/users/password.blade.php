@extends('layouts.admin')
@section('title')
    Password Change
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Updating User</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3 p-5">
    <form method="POST" action="{{ route('admin.users.change', $user->id) }}">
        @csrf
        @method('PATCH')
    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
        </div>
        <input id="password" type="password"
               class="form-control @error('password') is-invalid @enderror"
               name="password" required autocomplete="new-password" placeholder="Password">
        @error('password')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
    </div>
        <input type="checkbox" onclick="myFunction()">Show Password

    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
        </div>
        <input id="password-confirm" type="password" class="form-control"
               name="password_confirmation" required
               autocomplete="new-password" placeholder="Confirm Password">
    </div>
        <input type="checkbox" onclick="myFunction2()">Show Password
        <script>
            function myFunction2() {
                var x = document.getElementById("password-confirm");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        <script>
            function myFunction() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        <div class="form-group">
            <button class="btn btn-primary mt-2" type="submit">Reset</button>
        </div>


    </form>
    </div>
@endsection
