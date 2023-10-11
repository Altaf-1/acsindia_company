@extends('layouts.log')
@section('title')
    Admin Password Change
@endsection
@section('content')
    <div class="container emp-profile p-5">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Enter new Password</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('password.change')}}">
                        @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-email"></i></span>
                            </div>
                            <input placeholder="email" id="email" type="email"
                                   class="form-control" name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input  type="text" placeholder="phone"
                                    class="form-control" name="phone"
                                    required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password" type="password"
                                   class="form-control show @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="new-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <input type="checkbox" class="text-white" onclick="myFunction()">Show Password

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required
                                   autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <input type="checkbox" class="text-white" onclick="myFunction2()">
                            </div>
                            <div class="col-6">
                                <p class="text-white">Show Password</p>
                            </div>
                        </div>

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
                            <button class="btn  mt-2" type="submit">Reset</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
@endsection


