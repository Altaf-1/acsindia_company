
@extends('layouts.main')
@section('title')
    Daily Task
@endsection
@section('links')

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
@endsection


@section('styles')
    <style>
        .fa {
            color: #fb770c;
        !important;
        }
    </style>
@endsection

@section('content')

    <!--navbar-->
    <section id="header" class="transparent-header" style="background-color: orange">
        <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
    </section>

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif

    <section class="container emp-profile rounded border w-50" style="margin-top: 150px">
            <form action="{{ route('admin.admin-coupon.store') }}" method="POST">
                @csrf
                <div class="form-group font-weight-bold">
                    <label for="coupon_code">Course Code:</label>
                    <input required type="text" style="border-radius: 20px;" value="{{old('coupon_code')}}" class="form-control @error('coupon_code') is-invalid @enderror" name="coupon_code" placeholder="Enter code">
                    @error('coupon_code')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group font-weight-bold">
                    <label for="email">User email:</label>
                    <input required type="email" value="{{old('email')}}" style="border-radius: 20px;" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter user email">
                    @error('email')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group font-weight-bold">
                    <label for="coupon_discount">Discount:</label>
                    <input required type="number" value="{{old('coupon_discount')}}" style="border-radius: 20px;" class="form-control @error('coupon_discount') is-invalid @enderror" name="coupon_discount" placeholder="Enter discount 1 to 100">
                    @error('coupon_discount')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group font-weight-bold">
                    <label for="phone">User phone:</label>
                    <input type="number" required style="border-radius: 20px;" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Phone">
                    @error('phone')
                    <div class="invalid-feedback mt-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>


                <br>
                <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

            </form>
    </section>
    
     <section class="container mt-5">
        <div class="card shadow mb-4" id="usersTable">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Coupons</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Coupon Id</th>
                            <th>Coupon Code</th>
                            <th>Coupon Discount</th>
                            <th>User Mail</th>
                            <th>User Phone no</th>
                            <th>Applied</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody id="data">
                        @forelse($coupons as $coupon)
                            <tr>
                                <td>{{$coupon->id}}</td>
                                <td>{{$coupon->coupon_code}}</td>
                                <td>{{$coupon->coupon_discount}}</td>
                                <td>{{$coupon->email}}</td>
                                <td>{{$coupon->phone}}</td>
                                <td>
                                    @if($coupon->applied == 0)
                                        Not applied
                                    @else
                                        Applied
                                    @endif
                                </td>
                                <td>
                                    @if($coupon->status == 0)
                                        Not active
                                    @else
                                        Active
                                    @endif
                                </td>
                                <td><a class="btn btn-primary small" href="{{route('admin.coupon.edit',$coupon->id)}}">Deactivate</a></td>
                                <td>
                                    <form action="{{route('coupon.destroy', $coupon->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-primary small" style="background-color: red" type="submit">DELETE</button>
                                    </form>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No Coupons found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>





@endsection
@section('footer')
    @include('partials.footer')
@endsection
@section('scripts')
    <script src='{{asset("js/jquery-3.4.1.min.js")}}'></script>
    <script src='{{asset("js/slick.min.js")}}'></script>
    <script src='{{asset("js/main.js")}}'></script>

    <script src='{{asset("js/bootstrap.min.js")}}'></script>
    <script src='{{asset("js/jquery.fancybox.pack.js")}}'></script>
    <script src='{{asset("js/jquery.magnific-popup.min.js")}}'></script>
    <script src='{{asset("js/waypoints.min.js")}}'></script>
    <script src='{{asset("js/jquery.counterup.min.js")}}'></script>

    <script>
        function editProfile(id) {

            var message = document.getElementById('disapproveRequestMessage')

            message.action = "/user/" + id + "/update"

            $('#disapproveModal').modal('show')
        }

    </script>

    <script>
        function subject(id) {

            var message = document.getElementById('additionalSubject')

            message.action = "/user/" + id + "/update/subject"

            $('#subjectModal').modal('show')
        }

    </script>

@endsection
