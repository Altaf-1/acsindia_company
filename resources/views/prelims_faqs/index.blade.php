@extends('layouts.main')
@section('title')
    Prelims FAQ - Academy of Civil Services
@endsection
@section('links')
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('comimages/gbar.webp') }}" type="image/x-icon">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Slick  -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
@endsection
@section('styles')
    <style>
        .bg-courses {
            background-image: url("{{ asset('comimages/corbg.webp') }}");
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
                        <h1>Prelims FAQ</h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
                                <span class="first-item">
                                    <a href="/">Homepage</a></span>
                                <span class="separator">&gt;</span>
                                <span class="last-item">Prelims FAQ</span>
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
                <div class="row ml-2 mr-2 pb-4">
                    @forelse($prelims_faqs as $data)
                        <div class="col-sm-12 col-md-4 mb-4">
                            <img src="{{ asset('/storage/' . $data->image) }}" width="100%" alt="">
                        </div>
                    @empty
                        <div class="col-sm-12 text-center">
                            <h4>No Images</h4>
                        </div>
                    @endforelse

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
    <script src='{{ asset('js/jquery-3.4.1.min.js') }}'></script>
    <script src='{{ asset('js/main.js') }}'></script>
    <script src='{{ asset('js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('js/slick.min.js') }}'></script>
    <script src='{{ asset('js/jquery.fancybox.pack.js') }}'></script>
    <script src='{{ asset('js/jquery.magnific-popup.min.js') }}'></script>
    <script src='{{ asset('js/waypoints.min.js') }}'></script>
    <script src='{{ asset('js/jquery.counterup.min.js') }}'></script>
@endsection
