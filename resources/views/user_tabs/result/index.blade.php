@extends('layouts.main')
@section('title')
Assignments - Academy of Civil Services
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
        background-image: url("{{asset('comimages/corbg.webp')}}");
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

    .card:hover {
        box-shadow: 0px 2px 4px 10px #064b70;
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
                    <h1>Result</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
                            <span class="first-item">
                                <a href="/">Homepage</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item">Result</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb banner content area start -->
    <div class="container-fluid mt-5">
        <!-- .row -->
        <div>
            <div class="row ml-2 mr-2 ">
                @foreach($datas as $data)
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-4 ">
                    <div class="single-features-light text-center bg-light">
                        <div>
                            <i class="base-color fab fa-leanpub fa-3x"></i>
                            <h4>Test: {{$data->test_name}}</h4>
                            <h4>Date: {{$data->date}}</h4>
                            <h4>Marks: {{$data->marks}}</h4>
                            <h4>Total Marks: {{$data->total_marks}}</h4>

                            @if($data->pdf)
                            <a href="{{asset('storage/'.$data->pdf)}}" target="_blank" class="btn color-two button text-white">Your Evaluation Report</a>
                            @endif

                            @if($data->feedback)
                            <details>

                                <summary style="font-weight: bold; color:orange;font-size:20px"> Evaluation feedback</summary>
                                <p class="p-2 border " style="font-size:20px;color:black">{{$data->feedback}}</p>

                            </details>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- .row end -->
        </div>
        <!-- .row end -->
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
@endsection