@extends('layouts.main')
@section('title')
    Free Master Class - Academy of Civil Services
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
            background-image: url({{ asset('comimages/corbg.webp') }});
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
                        <h1 class="text-uppercase">APSC PRELIMS 2023</h1>
                        <h1 class="text-uppercase">FREE REVISION KIT</h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
                                <span class="first-item">
                                    <a href="/">Homepage</a></span>
                                <span class="separator">&gt;</span>
                                <span class="last-item text-capitalize">FREE REVISION KIT</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb banner content area start -->

        <!-- .container -->
        <!-- .row -->
        <section class="course">


            <div class="container-fluid m-3">
                <div class="container-fluid mt-5">
                    <div class="row ml-2 mr-2">
                        <div class="row ml-2 mr-2">
                        
                            
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                <!-- 1 -->
                                <div class="single-features-light text-center">
                                    <!-- single features -->
                                    <div>
                                        <!-- uses solid style -->
                                        <i class="base-color fas fa-book fa-3x"></i>
                                        <h4>NATIONAL PARKS OF ASSAM</h4>
                                        <a href="{{ route('user.free.master.class.parks') }}"
                                            class=" btn color-two button text-white">VIEW</a>
                                    </div>
                                </div>
                                <!-- end single features -->
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                <!-- 1 -->
                                <div class="single-features-light text-center">
                                    <!-- single features -->
                                    <div>
                                        <!-- uses solid style -->
                                        <i class="base-color fas fa-book fa-3x"></i>
                                        <h4>BRIDGES OVER BRAHMAPUTRA</h4>
                                        <a href="{{ route('user.free.master.class.bridges') }}"
                                            class=" btn color-two button text-white">VIEW</a>
                                    </div>
                                </div>
                                <!-- end single features -->
                            </div>
                            
                            
                            
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                <!-- 1 -->
                                <div class="single-features-light text-center">
                                    <!-- single features -->
                                    <div>
                                        <!-- uses solid style -->
                                        <i class="base-color fas fa-book fa-3x"></i>
                                        <h4>ASSAM HISTORY IN 7 PAGES</h4>
                                        <a href="{{ route('user.free.master.class.assam_history') }}"
                                            class=" btn color-two button text-white">VIEW</a>
                                    </div>
                                </div>
                                <!-- end single features -->
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                <!-- 1 -->
                                <div class="single-features-light text-center">
                                    <!-- single features -->
                                    <div>
                                        <!-- uses solid style -->
                                        <i class="base-color fas fa-book fa-3x"></i>
                                        <h4>MISSILES OF INDIA</h4>
                                        <a href="{{ route('user.free.master.class.missiles') }}"
                                            class=" btn color-two button text-white">VIEW</a>
                                    </div>
                                </div>
                                <!-- end single features -->
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                <!-- 1 -->
                                <div class="single-features-light text-center">
                                    <!-- single features -->
                                    <div>
                                        <!-- uses solid style -->
                                        <i class="base-color fas fa-book fa-3x"></i>
                                        <h4>LITERARY AWARDS OF ASSAM</h4>
                                        <a href="{{ route('user.free.master.class.awards') }}"
                                            class=" btn color-two button text-white">VIEW</a>
                                    </div>
                                </div>
                                <!-- end single features -->
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                <!-- 1 -->
                                <div class="single-features-light text-center">
                                    <!-- single features -->
                                    <div>
                                        <!-- uses solid style -->
                                        <i class="base-color fas fa-book fa-3x"></i>
                                        <h4>TESTS</h4>
                                        <a href="{{ route('user.free.master.class.test_1') }}"
                                            class=" btn color-two button text-white">VIEW</a>
                                    </div>
                                </div>
                                <!-- end single features -->
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                <div class="single-features-light text-center">
                                    <!-- single features -->
                                    <div>
                                        <i class="base-color fas fa-book fa-3x"></i>
                                        <h4>CSAT PPT (APSC EXCLUSIVE)</h4>
                                        <a href="{{ route('user.free.master.class.classppt') }}"
                                            class=" btn color-two button text-white">VIEW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                        <div class="single-features-light text-center">
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4>GENERAL CURRENT AFFAIRS FOR APSC</h4>
                                <a href="{{ route('user.csat.current.affairs.one') }}"
                                    target="_blank" class="btn color-two button text-white">VIEW</a>
                            </div>
                        </div>
                    </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                <!-- 1 -->
                                <div class="single-features-light text-center">
                                    <!-- single features -->
                                    <div>
                                        <!-- uses solid style -->
                                        <i class="base-color fas fa-book fa-3x"></i>
                                        <h4>ASSAM CURRENT AFFAIRS FOR APSC</h4>
                                        <a href="{{ route('user.free.master.class.paper') }}"
                                            class=" btn color-two button text-white">VIEW</a>
                                    </div>
                                </div>
                                <!-- end single features -->
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                <!-- 1 -->
                                <div class="single-features-light text-center">
                                    <!-- single features -->
                                    <div>
                                        <!-- uses solid style -->
                                        <i class="base-color fas fa-book fa-3x"></i>
                                        <h4>CSAT EASY TRICK VIDEOS</h4>
                                        <a href="{{ route('user.class.video.index', '5 Day Free Master Class') }}"
                                        class=" btn color-two button text-white">VIEW</a>
                                    </div>
                                </div>
                                <!-- end single features -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
