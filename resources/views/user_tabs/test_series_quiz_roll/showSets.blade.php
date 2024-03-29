@extends('layouts.main')
@section('title')
    Quiz - Academy of Civil Services
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
    @if ($message = Session::get('success'))
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
                title: '{{ $message }}'
            })
        </script>
    @elseif($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @elseif($message = Session::get('info'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{ $message }}',
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
                        <h1>Check My Marks</h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
                                <span class="first-item">
                                    <a href="/">Homepage</a></span>
                                <span class="separator">&gt;</span>
                                <span class="last-item">Check Marks</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb banner content area start -->
        <div class="container-fluid mt-5">
            <!-- .row -->
            <div class="row ml-2 mr-2 pb-4 justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-4 ">
                    <div class="single-features-light text-center bg-light">
                        <div>
                            <i class="base-color fab fa-leanpub fa-3x"></i>
                            <h4>SET A</h4>
                            <a href="{{route('testseriesquizroll.showQuiz', [$type, 'SET A'])}}"
                                    class="btn color-two button text-white">VIEW</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-4 ">
                    <div class="single-features-light text-center bg-light">
                        <div>
                            <i class="base-color fab fa-leanpub fa-3x"></i>
                            <h4>SET B</h4>
                            <!--{{ route('testseriesquizroll.showQuiz', [$type, 'SET B']) }}-->
                            <a href="{{route('testseriesquizroll.showQuiz', [$type, 'SET B'])}}"
                                    class="btn color-two button text-white">VIEW</a>
                            <!-- <button type="button" class="btn btn-secondary btn-lg" disabled>LOCK</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-4 ">
                    <div class="single-features-light text-center bg-light">
                        <div>
                            <i class="base-color fab fa-leanpub fa-3x"></i>
                            <h4>SET C</h4>
                            <a href="{{route('testseriesquizroll.showQuiz', [$type, 'SET C'])}}"
                                    class="btn color-two button text-white">VIEW</a>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mb-4 ">
                    <div class="single-features-light text-center bg-light">
                        <div>
                            <i class="base-color fab fa-leanpub fa-3x"></i>
                            <h4>SET D</h4>
                            <a href="{{route('testseriesquizroll.showQuiz', [$type, 'SET D'])}}"
                                    class="btn color-two button text-white">VIEW</a>
                        </div>
                    </div>
                </div>
                
                
                
            </div>
            <!-- .row end -->
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
