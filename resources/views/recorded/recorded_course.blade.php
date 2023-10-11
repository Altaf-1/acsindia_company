@extends('layouts.main')
@section('title')
    Course - Academy of Civil Services
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
                        <h1>REORDED COURSES</h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
                                <span class="first-item">
									<a href="/">Homepage</a></span>
                                <span class="separator">&gt;</span>
                                <span class="last-item">UPSC Courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb banner content area start -->

        
         <div id="courses" class="wrap-bg wrap-bg-dark bg-bottom-zero p-0">
            <div class="container p-0 justify-content-center ">
                <div class="row justify-content-center pt-5 ">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 p-0 course-animation course-single mb20">
                            <!-- 2 -->
                            <div class="themeioan_course border 2px solid dark">
                                <article>
                                    <!-- single course -->
                                    <div class="blog-photo ">
                                        <img class="img-fluid course-img border 2px solid dark"
                                        <img src="{{asset('comimages/RECORDED/1.png')}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="title text-center bg-primary p-3 text-white">UPSC RECORDED COURSES</h5>
                                        <ul class="course-bottom-list justify-content-end">
                                            <li>
                                                <div class="course-duration">
                                                    <span class="fa fa-clock-o"></span>
                                                    <a href="/upsc_recorded_course"
                                                       class=" btn color-two button text-white">SEE
                                                        ALL COURSES</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- end single course -->
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 p-0 course-animation course-single mb20">
                            <!-- 2 -->
                            <div class="themeioan_course border 2px solid dark">
                                <article>
                                    <!-- single course -->
                                    <div class="blog-photo ">
                                        <img class="img-fluid course-img border 2px solid dark"
                                        <img src="{{asset('comimages/RECORDED/2.png')}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="title text-center bg-primary p-3 text-white">APSC RECORDED COURSES</h5>
                                        <ul class="course-bottom-list justify-content-end">
                                            <li>
                                                <div class="course-duration">
                                                    <span class="fa fa-clock-o"></span>
                                                    <a href="/apsc_recorded_classes"
                                                       class=" btn color-two button text-white">SEE
                                                        ALL COURSES</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- end single course -->
                            </div>
                        </div>
                </div>
                <!-- .row end -->
            </div>
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
