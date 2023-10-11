@extends('layouts.main')
@section('title')
    Academy of Civil Services
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

    <script src="{{asset('js/sweetalert2.min.js')}}"></script>
    <!-- jQuery Fancybox  -->
    {{--    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">--}}
    <!-- Magnific Popup core CSS file -->
    {{--    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">--}}
@endsection
@section('styles')
    <style>
        @media only screen and (max-width: 1920px) {
        .bg-home-ome1 {
            background: url("{{ asset('comimages/head-4.png')}}") no-repeat center;
            background-size: cover;
        }
    }

    @media only screen and (max-width: 1044px) {
        .bg-home-ome1 {
            background: url("{{ asset('comimages/headimg.png')}}") no-repeat;
        }
    }

    #testimonials {
        background-image: url("{{ asset('comimages/brk1.webp')}}");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .count {
        text-align: left;
        margin-top: 0px;
        color: red;

    }

    @media screen and (max-width: 426px) {
        .bg-home-ome1 {
            background: url("{{ asset('comimages/mobile-img.png')}}") no-repeat;
            background-size: 100% 100%;
        }

        .mobile-center {
            text-align: center !important;
        }
    }

    marquee {
        font-size: 30px;
        font-weight: 800;
        color: #e67300;
        font-family: sans-serif;
        padding-top: 15px;
    }

    
    </style>
@endsection
@section('content')
    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif
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
    
    <div class="header-content position-left bg-home-ome1 col-sm-12" role="banner">
        <!--.container -->
        <div class="container-fluid pl-5">
            <!--.row -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 header-area">
                    <div class="header-area-inner header-text pt-5">
                        <!--single content header -->
                        <div class="mobile-center mt-3"><span data-aos="fade-down " data-aos-delay="500" class="subtitle ">Welcome to</span></div>
                        <h1 data-aos="fade-right" class="title mobile-center"><span class="base-color ml2 bg-white">&nbsp;Academy of Civil Services&nbsp;</span></h1>
                        <h3 data-aos="fade-down" class="text-white mobile-center">Be the Best - Be the Change</h3>
                        <div class="mt-5">
                            <a href="#regis" style"box-shadow: 5px 10px #888888;" class="color-two btn-custom smooth-scroll">CLICK HERE FOR REGISTRATION</a>
                        </div>

                        <!--<a href="https://acsassam.com/upsc-test-series/" class=" btn color-two button text-white" target="_blank">UPSC TEST SERIES 2020</a>-->
                    </div>
                </div>
            </div>
            <!--.row end -->
        </div>
        <!--.container end -->
    </div>
    
    <marquee scrollamount="15">THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES
        EXAMINATION.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE
        LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
    </marquee>

    <center>
        <h3 class="m-0 font-weight-bold text-primary justify-content-center mt-5">Register For {{$response["topic"]}}</h3>
    </center>
    <hr>
    <div class="container emp-profile mt-3" id="regis">
        <form action="{{ route('webinar-registration.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="webinar_id" value="{{$id}}" />
            <div class="form-group font-weight-bold">
                <label for="first_name">First Name:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" value="{{old('first_name')}}" name="first_name"
                       placeholder="Enter first Name" required>
            </div>
            <div class="form-group font-weight-bold">
                <label for="last_name">Last Name:</label>
                <input type="text" style="border-radius: 20px;" class="form-control"  value="{{old('last_name')}}" name="last_name"
                       placeholder="Enter last Name" required>
            </div>
            <div class="form-group font-weight-bold">
                <label for="email">Email:</label>
                <input type="text" style="border-radius: 20px;" class="form-control"  value="{{old('email')}}" name="email"
                       placeholder="Enter Email" required>
            </div>
            <div class="form-group font-weight-bold">
                <label for="confirm_email">Confirm Email:</label>
                <input type="text" style="border-radius: 20px;" class="form-control"  name="confirm_email"
                       placeholder="Enter Confirm email" required>
            </div>
            <div class="form-group font-weight-bold">
                <label for="phone">Phone:</label>
                <input type="text" style="border-radius: 20px;" class="form-control"  value="{{old('phone')}}" name="phone"
                       placeholder="Enter phone number" required>
            </div>
            <div class="form-group font-weight-bold">
                <label for="city">City:</label>
                <input type="text" style="border-radius: 20px;" class="form-control"  value="{{old('city')}}" name="city"
                       placeholder="Enter City" required>
            </div>
            <div class="form-group font-weight-bold">
                <label for="state">State:</label>
                <input type="text" style="border-radius: 20px;" class="form-control"  value="{{old('state')}}" name="state"
                       placeholder="Enter State" required>
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Submit</button>

        </form>
    </div>
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
@endsection

