@extends('layouts.main')
@section('title')
    RECORDED CLASS - Academy of Civil Services
@endsection
@section('links')
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('comimages/gbar.webp')}}" type="image/x-icon">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Slick  -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
@endsection
@section('styles')
    <style>
        .bg-courses {
            background-image: url({{asset('comimages/corbg.webp')}});
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .course-img {
            width: 100%;
            max-height: 500px;

        }

        /*.course-width {*/
        /*    width: 80%;*/
        /*    margin: 0 auto 0 auto;*/
        /*}*/

        .discount {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            color: #ff9933;
            font-weight: bold;
            font-size: 40px;
        }

        .course-end {
            background-color: #ff9933;
            border-radius: 10px;
        }

        .mobile {
            display: inline-flex;
            justify-content: flex-end;
            padding-top: 40px;
        }

        @media (max-width: 576px) {
            .mobile {
                justify-content: center;
            !important;
                padding-top: 0;
                padding-bottom: 30px;

            }
        }

        .buy-btn {
            background-color: white;
            color: #ff9933;
        !important;
        }

        .txt-color {
            color: #ff9933;
        !important;
        }
        .card:hover{
            box-shadow: 0px 2px 4px 10px #064b70;
        }

        .error-border{
            border: 2px solid red;
        }

        .success-border{
            border: 2px solid green;
        }

        input:focus, input.form-control:focus {
            outline:none !important;
            outline-width: 0 !important;
            box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
        }
    </style>
@endsection
@section('content')



    @if($message = Session::get('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-start',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{{$message}}'
            })
        </script>
    @elseif($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @elseif($message = Session::get('info'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <!-- header area start -->
    <header id="header" class="transparent-header">
        <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
    </header>
    <!-- end header area -->
    <main>
        <!-- breadcrumb banner content area start -->
        <div class="lernen_banner bg-courses">
            <div class="container">
                <div class="row">
                    <div class="lernen_banner_title">
                        <h1 class="text-uppercase">Coupon</h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
                                <span class="first-item">
									<a href="/">Homepage</a></span>
                                <span class="separator">&gt;</span>
                                <span class="last-item text-capitalize">Coupon</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb banner content area start -->


        <!-- courses area start -->
        <div id="features" class="wrap-bg">

            <!-- .container -->
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
                <!-- .row -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8 col-md-8 col-xs-12">
                            <section class="container emp-profile p-4 rounded shadow-lg border">
                                <form action="{{ route('user.coupon.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group font-weight-bold">
                                        <label for="task">Unique Coupon Code:</label><br>
                                        <input id="couponCode" style="border-radius: 20px;width: 100%;" class="p-2 mr-2" onkeyup="checkCoupon(this.value)"  name="coupon_code" placeholder="Enter Coupon Code">
                                        <input readonly class="p-2 mt-1 w-100" style="border: none" id="error">
                                    </div>

                                    <div class="form-group font-weight-bold">
                                        <label for="email">Email Recorded:</label>
                                        <input type="email" style="border-radius: 20px;" readonly value="{{$user->email}}" class="form-control" name="email" placeholder="Email">
                                    </div>

                                    <div class="form-group font-weight-bold">
                                        <label for="phone">Phone Recorded:</label>
                                        <input type="text" style="border-radius: 20px;" readonly value="{{$user->phone}}" class="form-control" name="phone" placeholder="Phone">
                                    </div>

                                    <div class="form-group font-weight-bold">
                                        <label for="discount">Discount Value:</label>
                                        <input type="text" style="border-radius: 20px;" readonly value="50%" class="form-control" name="coupon_discount" placeholder="discount">
                                    </div>


                                    <br>
                                    <div class="form-group font-weight-bold text-center">
                                        <button id="sub-btn" class="btn button text-white" style="background: #fb770c"type="submit">Create</button>
                                    </div>

                                </form>

                            </section>
                        </div>

                    </div>

                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
    </main>
@endsection
@section('footer')
    @include('partials.footer')
@endsection
@section('scripts')
    <script src='{{asset("js/jquery-3.4.1.min.js")}}'></script>
    <script src='{{asset("js/main.js")}}'></script>
    <script src='{{asset("js/bootstrap.min.js")}}'></script>
    <script src='{{asset("js/slick.min.js")}}'></script>
    <script src='{{asset("js/jquery.fancybox.pack.js")}}'></script>
    <script src='{{asset("js/jquery.magnific-popup.min.js")}}'></script>
    <script src='{{asset("js/waypoints.min.js")}}'></script>
    <script src='{{asset("js/jquery.counterup.min.js")}}'></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        function checkCoupon(val){
            // console.log(val);
            axios.get(`https://www.acsindiaias.com/api/couponCheck/${val}`)
                .then(result => {
                    var res = result.data.coupon_code[0];

                    document.getElementById('error').value = res;


                    if(res === "Coupon good"){
                        document.getElementById("couponCode").classList.remove("error-border");
                        document.getElementById("couponCode").classList.add("success-border");
                        document.getElementById("sub-btn").disabled = false;

                    }else {
                        document.getElementById("couponCode").classList.remove("success-border");
                        document.getElementById("couponCode").classList.add("error-border");
                        document.getElementById("sub-btn").disabled = true;
                    }
                })
                .catch(err => {

                })
        }
    </script>
@endsection
