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
                        <h1 class="text-uppercase">Request Coupon</h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
                                <span class="first-item">
									<a href="/">Homepage</a></span>
                                <span class="separator">&gt;</span>
                                <span class="first-item">
									<a href="{{route('free.new.video.main.topic','JOIN WEBINAR')}}">Join Webinar</a></span>
                                <span class="separator">&gt;</span>
                                <span class="last-item text-capitalize">Request Coupon</span>
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
                            <form action="{{ route('user.request.coupon.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group font-weight-bold">
                                    <label for="discount">Full Name : </label>
                                    <input type="text" style="border-radius: 20px;" class="form-control" name="name" placeholder="FullName">
                                </div>
                                <div class="form-group font-weight-bold">
                                    <label for="email">Email : </label>
                                    <input type="email" style="border-radius: 20px;"  class="form-control" name="email" placeholder="Email">
                                </div>

                                <div class="form-group font-weight-bold">
                                    <label for="phone">Phone (WhatsApp number) :</label>
                                    <input type="text" style="border-radius: 20px;"  class="form-control" name="phone" placeholder="Phone (WhatsApp number)">
                                </div>




                                <br>
                                <div class="form-group font-weight-bold text-center">
                                    <button id="sub-btn" class="btn button text-white" style="background: #fb770c"type="submit">Request</button>
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
