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
        {{--for the large screen--}}
      @media only screen and (max-width: 1920px) {
            .bg-home-ome1 {
                background: url({{asset('comimages/bk3.webp')}}) no-repeat center;
                background-size: cover;
            }
        }

        @media only screen and (max-width: 1044px) {
            .bg-home-ome1 {
                background: url({{asset('comimages/bk3.webp')}}) no-repeat;
            }
        }
    </style>
@endsection
@section('content')
    <div style="height: 90px; background-image: url({{asset('comimages/corbg.webp')}})">
        <!-- header area start -->
        <header id="header" class="transparent-header">
            <!-- #navigation start -->
        @include('partials.navbar')
        <!-- #navigation end -->
        </header>

    </div>

    <main>
        <iframe src="https://drive.google.com/file/d/1FKtS-7VaekpRkqweGTU48s-dEq0sSwTZ/preview" style="width:100%; height:100vh;"></iframe>
{{--        <iframe src="https://drive.google.com/file/d/1FKtS-7VaekpRkqweGTU48s-dEq0sSwTZ/preview" width="640" height="480"></iframe>--}}
{{--        <iframe style="width:100%; height:100vh;" src="{{asset('pdf/ACS Wisdon 5- January to March  2020.pdf')}}" frameborder="0"></iframe>--}}
        <!-- end header content area start -->
    </main>

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
