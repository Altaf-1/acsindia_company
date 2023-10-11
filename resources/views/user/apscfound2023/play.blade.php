@extends('layouts.main')
@section('title')
    User Profile
@endsection
@section('links')

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">

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

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <!--navbar-->
    <section id="header" style="background-image: url({{asset('comimages/bk3.webp')}});">
        <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
    </section>
    <div class="container p-2">
        <div class="row justify-content-center text-center p-4">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2>{{$video->title}}</h2>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-12 d-flex justify-content-center">
                <iframe src="{{$video->video}}"
                        width="1000" height="500"
                        frameborder="0"
                        allow="autoplay; fullscreen" allowfullscreen>
                </iframe>
            </div>
        </div>


    </div>
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

@endsection
