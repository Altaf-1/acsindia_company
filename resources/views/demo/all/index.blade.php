@extends('layouts.main')
@section('title')
Academy of Civil Services | Best IAS Coaching in India
@endsection
@section('links')
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- Main Custom CSS -->
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<!-- Slick  -->
<link rel="stylesheet" href="{{asset('css/slick.css')}}">
<!-- Font Awesome  -->
<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="{{asset('js/sweetalert2.min.js')}}"></script>

<!-- jQuery Fancybox  -->
{{--
<link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
--}}
<!-- Magnific Popup core CSS file -->
{{--
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
--}}
<!-- home 12  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- favicon -->

<link rel="apple-touch-icon"
    href="{{asset('https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css')}}">
<link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('css/hcss/images/fav.png')}}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Bootstrap v4.4.1 css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!-- font-awesome css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/font-awesome.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
<!-- animate css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/animate.css')}}">
<!-- owl.carousel css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/owl.carousel.css')}}">
<!-- slick css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/slick.css')}}">
<!-- off canvas css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/off-canvas.css')}}">
<!-- linea-font css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/linea-fonts.css')}}">
<!-- flaticon css  -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/flaticon.css')}}">
<!-- magnific popup css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/magnific-popup.css')}}">
<!-- Main Menu css -->
<link rel="stylesheet" href="{{asset('css/hcss/rsmenu-main.css')}}">
<!-- spacing css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/rs-spacing.css')}}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/style.css')}}">
<!-- This stylesheet dynamically changed from style.less -->
<!-- responsive css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/responsive.css')}}">

<link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap')}}"
    rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/ucss/open-iconic-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/css/animate.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/magnific-popup.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/aos.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/ionicons.min.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/icomoon.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/style.css')}}">
<link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap')}}"
    rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/ucss/open-iconic-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/css/animate.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/magnific-popup.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/aos.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/ionicons.min.css')}}">

<link rel="stylesheet" href="{{asset('css/ucss/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/icomoon.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/style.css')}}">
@endsection
@section('styles')
<style>

    .carousel-item{
        height: 90vh !important;
    }
    .slider-bg1 {
        background: url("{{asset('comimages/uniweb/hero2.webp')}}") no-repeat;
        background-size: 100% 100%;
    }

    .slider-bg2 {
        background: url("{{asset('comimages/uniweb/hero1.webp')}}") no-repeat;
        background-size: 100% 100%;
       

    }

    @media screen and (max-width: 515px) {
        
        .carousel-item{
        height: 80vh !important;
        }

        .slider-bg1 {
            background: url('{{asset('comimages/unimob/m1.webp')}}') no-repeat;
            background-size: 100% 100%;
            height: 80vh !important;
        }

        .slider-bg2 {
            background: url("{{asset('comimages/unimob/mm2.webp')}}") no-repeat;
            background-size: 100% 100%;
            height: 80vh !important;

        }

    }
    
    .dropbtn {
  color: black;
  padding: 2px;
  font-size: 16px;
  line-height: 27px;
  padding-left: 1.5rem !important;
padding-right: 1.5rem !important;
    margin-top: .5rem !important;
    background-color: #134982;
    color: white;
  border-radius: 15px;
  margin: 2px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #bf710a;
  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #bbb;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #bf710a;}

    
</style>

@endsection
@section('content')

<header id="header">
    <nav class="navbar navbar-default navbar-expand-lg sticky pb-3" id="navigation" data-offset-top="0">
    <!-- .container -->
    <div class="container-fluid">
        <!-- Logo and Menu -->
        <div class="navbar-header">
            <div class="navbar-brand">
                <img src='{{asset("comimages/icons/log1.JPG")}}' style="width: 250px; height: 200px; " alt="">
            </div>
            <!-- site logo -->
        </div>
        <!-- Menu Toogle -->
        <div class="burger-icon bg-dark">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <ul class="nav navbar-nav ml-auto text-center active">
                <!-- Menu Link -->
                <li class="subnav">
                    <div class="dropdown">
                        <a href="https://acsindiaias.com/" class="btn dropbtn">HOME</a>
                        </div>
                </li>
                <!--<li class="subnav">-->
                <!--    <div class="dropdown">-->
                <!--        <button class="dropbtn">About</button>-->
                <!--        </div>-->
                <!--</li>-->
                <li class="subnav">
                    <div class="dropdown">
                        <a href="https://acsindiaias.com/upsc" class="btn dropbtn">UPSC</a>
                        <div class="dropdown-content">
                            <a href="https://acsindiaias.com/course">Online Courses</a>
                            <a href="https://acsindiaias.com/syllabus">UPSC Syllabus</a>
                            <a href="https://acsindiaias.com/previous">UPSC Previous Year Question Paper</a>
                            <a href="https://acsindiaias.com/digipedia">NCERT Books</a>
                            <a href="https://acsindiaias.com/current-affair/current_affair">Daily Current Affairs</a>
                          </div>
                        </div>
                </li>
                <li class="subnav">
                    <div class="dropdown">
                        <a href="https://acsindiaias.com/apsc" class="btn dropbtn">APSC</a>
                        <div class="dropdown-content">
                            <a href="https://acsindiaias.com/apsc/courses">APSC Online Courses</a>
                            <a href="https://acsindiaias.com/syllabus">APSC Syllabus</a>
                            <a href="https://acsindiaias.com/previous">APSC Previous Year Question Paper</a>
                            <a href="https://acsindiaias.com/digipedia">NCERT Books</a>
                            <a href="https://acsindiaias.com/current-affair/current_affair">APSC Daily Current Affairs</a>
                          </div>
                        </div>
                </li>

                <!--<li class="subnav">-->
                <!--    <div class="dropdown">-->
                <!--        <button class="dropbtn">Demo Class</button>-->
                <!--        </div>-->
                <!--</li>-->
                <li class="subnav header-cta">
                    <!-- Authentication Links -->
                    @auth
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle bg-dark text-white p-3 rounded-pill" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-black-50" href="{{ route('user.show', Auth::user()->id) }}">
                            My Courses
                        </a>
                        <a class="dropdown-item text-black-50" href="{{ route('order.index') }}">
                            My Orders
                        </a>
                        @if(Auth::user()->role == 'super')
                        <a class="dropdown-item text-black-50" href="{{ route('admin.index') }}">
                            Admin Panel
                        </a>
                        @endif
                        @if(Auth::user()->role == 'admin')
                        <a class="dropdown-item text-black-50" href="{{ route('admin.index') }}">
                            Admin Panel
                        </a>
                        @endif
                        <a class="dropdown-item text-black-50" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link btn p-1 pl-4 pr-4 mt-2" style="background-color: #d99032;"
                        href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link btn p-1 pl-4 pr-4 mt-2" style="background-color: #d99032"
                        href="{{ route('register') }}">{{ __('SIGN UP') }}</a>
                </li>
                @endif
                @endauth
            </ul>
        </div>
        <!-- Menu Toogle end -->
    </div>
    <!-- .container end -->
</nav>
</header>

<!-- header area start -->

<main>

    <!-- About Section End -->
    <!-- /* <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(comimages/demo-1.png);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start"
                    data-scrollax-parent="true">
                    <div class="col-md-9 ">
                        <img class="" style="width: 70px;" src="{{asset('comimages/icon/upsc.png')}}" alt="upsc_logo">
                        <h3 class="mb-4 text-white font-weight-bold">संघ लोक सेवा आयोग</h3>
                        <h1 class="text-uppercase">Union Public Service Commission</h1>
                        <p><a href="/upsc1" class="btn btn-primary px-4 py-3 mt-3">About UPSC Exam</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(comimages/demo-2.png);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start"
                    data-scrollax-parent="true">
                    <div class="col-md-9 ">
                        <img class="bg-light" style="width: 70px;" src="{{asset('comimages/icon/apsc.png')}}"
                            alt="upsc_logo">
                        <h3 class="mb-4 text-white font-weight-bold">অসম লোকসেৱা আয়োগ</h3>
                        <h1 class="text-uppercase">Assam Public Service Commission</h1>
                        <p><a href="https://acsindiaias.com/apsc" class="btn btn-primary px-4 py-3 mt-3">About APSC Exam</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section> */ -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><a href="http://wew"></a></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

        </ol>
        
        <div class="carousel-inner">
            <div class="carousel-item active">

                <div class="header-content slider-bg1" role="banner">
                </div>

            </div>
            <div class="carousel-item">
                <div class="header-content slider-bg2" role="banner">
                </div>
            </div>
            <!--<div class="carousel-item">-->

            <!--    <div class="header-content slider-bg3" role="banner">-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="carousel-item">-->
            <!--    <div class="header-content slider-bg4" role="banner">-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div

    <!--  @auth-->
    <!--<a href="{{ route('user.show', Auth::user()->id) }}"><h2 class="d-flex flex-column btn text-white shadow p-3 rounded bg-danger mt-4 container">ATTEND FREE DEMO CLASS WITH OUR TOP TEACHERS</h2></i></a>-->
    <!--@else-->
    <!--    <a href="/login"><h2 class="d-flex flex-column btn text-white shadow p-3 rounded bg-danger mt-4 container">ATTEND FREE DEMO CLASS WITH OUR TOP TEACHERS</h2></i></a>-->

    <!--  @endauth-->

    
    <!-- Categories Section Start -->
    <div id="rs-categories" class="rs-categories gray-bg style1 pt-10 pb-70 md-pt-10 md-pb-40">
        <div class="container-fluid pl-5 p-5">
            <div class="sec-title text-center justify-content-center">
                        <div class="sub-title primary text-center justify-content-center">Subject Categories</div>
                        <div class="row justify-content-center pb-3 pt-2 pb-2">
                <div class="col-md-8 text-center heading-section">
                    <h2 class="mb-4 text-uppercase">Our Top Categories</h2>
                </div>

            </div>
                    </div>
            <div class="row">
									<div class="col-lg-3 col-sm-3 col-md-3 text-center justify-content-center p-1" >
									<img class="text-danger p-1 mb-4" style="width:110px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/icons/d2.png')}}">
									<a href="/upsc"><h4 style="background-color: #134982" class="d-flex flex-column btn text-white shadow p-3 rounded">UPSC PREPARATION</h4></i></a>
									</div>
									<div class="col-lg-3 col-sm-3 col-md-3 text-center justify-content-center p-1" >
									<img class="text-danger p-1 mb-4" style="width:110px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/icons/d5.png')}}">
									<a href="/apsc"><h4 style="background-color: #134982" class="d-flex flex-column btn text-white shadow p-3 rounded">APSC PREPARATION</h4></i></a>
									</div>
									<div class="col-lg-3 col-sm-3 col-md-3 text-center justify-content-center p-1" >
									<img class="text-danger p-1 mb-4" style="width:110px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/icons/d4.png')}}">
									<a href="https://acsindiaias.com/self-study"><h4 style="background-color: #134982" class="d-flex flex-column btn text-white shadow p-3 rounded">SELF STUDY</h4></i></a>
									</div>
									<div class="col-lg-3 col-sm-3 col-md-3 text-center justify-content-center p-1" >
									<img class="text-danger p-1 mb-4" style="width:110px; boder: 1px solid black; border-radius: 20px;" src="{{asset('https://acsindiaias.com/public/comimages/icons/d1.png')}}">
									<a href="/current_affairs_2023"><h4 style="background-color: #134982" class="d-flex flex-column btn text-white shadow p-3 rounded">CURRENT AFFAIRS</h4></i></a>
									</div>

									</div>
        </div>
    </div>
    <!-- Categories Section End -->

    <section class="gray-bg2">
        <div class="container pb-4">
            <div class="row justify-content-center pb-3 pt-2 pb-2">
                <div class="col-md-8 text-center heading-section">
                    <h2 class="mb-4 text-uppercase">Upcoming Events</h2>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 bg-light p-3">
                    <div class="row ">
                        <div class="col-lg-4">
                            <img src="{{ asset('comimages/head/1.png') }}" alt="images">
                        </div>
                        <div class="col-lg-7">
                            <div class="course-info">
                                <h3 class="course-title">
                                    <a href="/acs_seminar">
                                        <h3 class="font-weight-bold">APSC/UPSC FREE SEMINAR</h3>
                                    </a>
                                </h3>
                                <div class="bottom-part">
                                    <div class="info-meta">
                                        <ul>
                                            <li class="ratings">
                                                <i class="font-weight-bold"> Offline Mode</i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-part">
                                        <a href="/acs_seminar"
                                            class="btn btn-info text-white font-weight-bold mb-4">Apply Now<i
                                                class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 bg-light p-3 ">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('comimages/head/webi.png') }}" alt="images">
                        </div>
                        <div class="col-lg-7">
                            <div class="course-info">
                                <h3 class="course-title">
                                    <a href="/acs_seminar">
                                        <h3 class="font-weight-bold">APSC/UPSC FREE WEBINAR</h3>
                                    </a>
                                </h3>
                                <div class="bottom-part">
                                    <div class="info-meta">
                                        <ul>
                                            <li class="ratings">
                                                <i class="font-weight-bold"> Online Mode</i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-part">
                                        <a href="/acs_seminar"
                                            class="btn btn-info text-white font-weight-bold mb-4">Apply Now<i
                                                class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                </div>
    </section>
    
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('comimages/uniweb/ab1.jpg')}});"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex">
                    <div class="img img-video d-flex align-items-center"
                        style="background-image: url({{asset('comimages/uniweb/ab1.jpg')}});">
                        <div class="video justify-content-center">
                            <a href="https://youtu.be/Eg-tjUwIAio"
                                class="icon-video d-flex justify-content-center align-items-center">
                                <img src="{{ asset('comimages/icons/acslog.png') }}" style="width:220px" alt="images">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-white pl-lg-5 pt-md-0 pt-1">
                     <div class="py-md-5">
                        <div class="heading-section heading-section-white mb-5">
                            <h2 class="mb-4">Request For Counselling</h2>
                        </div>
                        <form method="get" action="{{route('query')}}" class="appointment-form">
                            @csrf
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <input type="text" class="form-control" type="text" name="name"
									id="contactName" placeholder="First Name" title="Your Full Name"/>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="text" class="form-control" type="email"
									name="email"
									id="contactEmail" placeholder="Last Name" title="Your Email"/>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="number" class="form-control" placeholder="Phone" name="phone"
									id="contactSubject"/>
                                </div>
                            </div>

                            <div class="d-md-flex">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="2" class="form-control"
                                        placeholder="Message" id="contactMessage"
									></textarea>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="submit" value="Submit" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="6">0</strong>
                                    <span>Certified Teachers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="13151">0</strong>
                                    <span>Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="10">0</strong>
                                    <span>Courses</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="18">0</strong>
                                    <span>Awards Won</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div id="teachers" class="wrap-bg wrap-bg-dark pt-0 bg-light">
			<div class="container-fluid">
				<div class="row justify-content-center text-center" style="background-color: #134982">
					<div class="col-lg-8">
						<div class="section-title with-p text-white mb-0 p-4">
							<h2 class="mb-0">Meet Our Professional Team</h2>
						</div>
					</div>
				</div>
				<br>
				<div class="row carousel-slider gallery-slider bg-light">
					<div class="col-lg-3">
						<article class="item">
							<!-- single teacher -->
							<img src="{{asset('comimages/Ashif.webp')}}" alt="Image 1"/></a>
							<h5>Ashif Rahman</h5>
							<span>Managing Director</span>
						</article>
						<!-- end single teacher -->
					</div>
					<div class="col-sm-3">
						<article class="item">
							<img src="{{asset('comimages/saji.jpeg')}}" alt="Image 2"/></a>
							<h5>Dr. Sajid Puthen</h5>
							<span>Academic Director</span>
						</article>
						<!-- end single teacher -->
					</div>
					<div class="col-sm-3">
						<article class="item">
							<img src="{{asset('comimages/ishala.webp')}}" alt="Image 2"/></a>
							<h5>ISHALA K</h5>
							<span>Faculty & Content Developer</span>
						</article>
						<!-- end single teacher -->
					</div>
					<div class="col-sm-3">
						<article class="item">
							<img src="{{asset('comimages/Mahasweta.webp')}}" alt="Image 2"/></a>
							<h5>Mahasweta Goswami</h5>
							<span>Faculty & Content Developer</span>
						</article>
						<!-- end single teacher -->
					</div>
					<div class="col-sm-3">
						<article class="item">
							<img src="{{asset('comimages/faizal.jpeg')}}" alt="Image 2" /></a>
							<h5>MUHAMMED FAISAL K</h5>
							<span>Faculty & Content Developer</span>
						</article>
						<!-- end single teacher -->
					</div>
					
					<div class="col-sm-3">
						<article class="item">
							<!-- single teacher -->
							<img src="{{asset('comimages/sweta1.webp')}}" alt="Image 3"/></a>
							<h5>Sweta Gupta</h5>
							<span>Senior Office Manager</span>
						</article>
						<!-- end single teacher -->
					</div>
					<div class="col-sm-3">
						<article class="item">
							<!-- single teacher -->
							<img src="{{asset('comimages/baisel-n.jpeg')}}" alt="Image 3"/></a>
							<h5>Basil Cherian</h5>
							<span>Academic Assistant</span>
						</article>
						<!-- end single teacher -->
					</div>
					<div class="col-sm-3">
						<article class="item">
							<!-- single teacher -->
							<img src="{{asset('comimages/altaf1.webp')}}" alt="Image 3"/></a>
							<h5>Altaf Hussain</h5>
							<span>Chief Technical Officer</span>
						</article>
						<!-- end single teacher -->
					</div>
					<div class="col-sm-3">
						<article class="item">
							<!-- single teacher -->
							<img src="{{asset('comimages/neha1.webp')}}" alt="Image 3"/></a>
							<h5>Neha Ahmed</h5>
							<span>Academic Counsellor</span>
						</article>
						<!-- end single teacher -->
					</div>
					<div class="col-sm-3">
						<article class="item">
							<!-- single teacher -->
							<img src="{{asset('comimages/rockey-1.jpeg')}}" alt="Image 3"/></a>
							<h5>Rocky Sarma</h5>
							<span>Office Assistant</span>
						</article>
						<!-- end single teacher -->
					</div>
					<div class="col-sm-3">
						<article class="item">
							<!-- single teacher -->
							<img src="{{asset('comimages/sagar.jpeg')}}" alt="Image 3"/></a>
							<h5>Sagarjit Gogoi</h5>
							<span>Academic Counsellor</span>
						</article>
						<!-- end single teacher -->
					</div>
					<div class="col-sm-3">
						<article class="item">
							<!-- single teacher -->
							<img src="{{asset('comimages/disha_col.jpeg')}}" alt="Image 3"/></a>
							<h5>Disha Saikia</h5>
							<span>Academic Counsellor</span>
						</article>
						<!-- end single teacher -->
					</div>
				</div>
			</div>
		</div>
    
     <div class="container-fluid pb-5 pt-5 pb-3" style="background-color: #134982">
            <div class="container">
            <div class="row">
                <div class="col-lg-3" style="background-color: #134982">
                    <h2 class="pt-3 pb-3 text-white text-center">Visit Our Online Channels</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.facebook.com/acs.iasindia">
                                <img src="{{ asset('comimages/social/fb.png') }}" style="height: 60px;" />
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://www.instagram.com/academyofcivilservices/">
                                <img src="{{ asset('comimages/social/insta.png') }}" style="height: 60px;" />
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://t.me/acsias">
                                <img src="{{ asset('comimages/social/tel.png') }}" style="height: 60px;" />
                            </a>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a class="btn btn-danger mt-5 text-center"
                            href="https://www.youtube.com/channel/UCOs-olyxhFwKLyz353n5kgw">View All Videos</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('comimages/social/ar.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Artificial Intelligence</h5>
                            <a href="https://youtu.be/tVyNDJqndYQ" class="btn btn-danger">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('comimages/social/y2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Federal System in India</h5>
                            <a href="https://youtu.be/-tOVufeXdFs" class="btn btn-danger">View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('comimages/social/ma.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Story of Ponniyin Selvan</h5>
                            <a href="https://youtu.be/pevfbMSBXuw" class="btn btn-danger">View</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <section>
            <div style="background-color: #134982;">
                <div class="row pt-5 justify-content-center text-center text-white">
                    <div class="col-lg-8">
                        <div class="section-title with-p mb-0 p-4">
                            <h2 class="mb-0">VISIT OUR INSTITUTE</h2>
                        </div>
                    </div>
                </div>
                <div class="row pl-4 pr-4">
                    <div class="col-lg-6 col-sm-12">
                        <div>
                            <p><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.4851596283424!2d94.91970161425219!3d27.48528324182426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37409869cb35768d%3A0x491ce8fdcae8360a!2sAcademy%20Of%20Civil%20Services!5e0!3m2!1sen!2sin!4v1641360136814!5m2!1sen!2sin"
                                    width="900" height="400" style="border:2px solid black;" allowfullscreen=""
                                    loading="lazy"></iframe></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div>
                            <p><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14323.616872684346!2d91.77054733037403!3d26.167248685267065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a598a126db899%3A0x33606f5c614c8f89!2sAcademy%20of%20Civil%20Services%2CGuwahati!5e0!3m2!1sen!2sin!4v1660107183985!5m2!1sen!2sin"
                                    width="900" height="400" style="border:2px solid black;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="m-0">
                    <div class="row">
                        <div class="col-lg-3 col-sm-12">
                            <div class="d-flex flex-row">
                                <img class="secondary-color"
                                    style="width:70px; boder: 1px solid black; border-radius: 30%; padding-top: 10px;"
                                    src="{{ asset('comimages/phone.gif') }}">
                                <h3 style="padding-top: 25px; padding-left: 40px; color: #fff;">9085268769</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="d-flex flex-row">
                                <img class="secondary-color"
                                    style="width:70px; boder: 1px solid black; border-radius: 30%; padding-top: 10px;"
                                    src="{{ asset('comimages/gmail.gif') }}">
                                <h4 style="padding-top: 25px; padding-left: 40px; color: #fff;">acsindia.ias@gmail.com</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="d-flex flex-row">
                                <div class="d-flex flex-column">
                                    <h4 class="text-center underline"
                                        style="padding-top: 15px; padding-left: 40px; color: #fff;"><u>DIBRUGARH CENTER</u>
                                    </h4>
                                    <h4 style="padding-top: 15px; padding-left: 40px; color: #fff;">NALIAPOOL,DIBRUGARH
                                    </h4>
                                    <h4 style="padding-top: 15px; padding-left: 40px; color: #fff;">Near Ganesh Mandir</h4>
                                    <h4 style=" padding-left: 40px; color: #fff;">District: Dibrugarh</h4>
                                    <h4 style=" padding-left: 40px; color: #fff;">PIN Code: 786001</h4>
                                    <h4 style=" padding-left: 40px; color: #fff;">State: Assam</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="d-flex flex-row">
                                <div class="d-flex flex-column">
                                    <h4 class="text-center underline"
                                        style="padding-top: 15px; padding-left: 40px; color: #fff;"><u>GUWAHATI CENTER</u>
                                    </h4>
                                    <h4 style="padding-top: 15px; padding-left: 40px; color: #fff;">3rd floor, Chitrabon
                                        Enclave, R G BARUAH ROAD,</h4>
                                    <h4 style=" padding-left: 40px; color: #fff;">Near Gauhati Commerce College</h4>
                                    <h4 style=" padding-left: 40px; color: #fff;">PIN Code: 781003</h4>
                                    <h4 style=" padding-left: 40px; color: #fff;">State: Assam</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <!--      <section id="con" style="background-image: url({{asset('comimages/feed.webp')}});">-->
		<!--<div id="contact" class="wrap-bg pt-0">-->
		<!--	<div class="container-fluid">-->
		<!--		<div class="row justify-content-center text-center text-white" style="background-color: #134982" >-->
		<!--			<div class="col-lg-8">-->
		<!--				<div class="section-title with-p mb-0 p-4">-->
		<!--					<h2 class="mb-0">FEEDBACK</h2>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--		<div class="row container m-auto pt-5">-->
		<!--			<div class="col-md-6 col-lg-6">-->
		<!--				<form class="themeioan-form-contact form" method="post" action="{{route('user.feedback.store')}}">-->
		<!--					@csrf-->
							<!-- Change Placeholder and Title -->
		<!--					<div>-->
		<!--						<input class="input-text required-field" style="border-radius: 35px;" type="text" name="name"-->
		<!--							placeholder="Name" title="Your Full Name"/>-->
		<!--					</div>-->
		<!--					<div>-->
		<!--						<input class="input-text required-field email-field"  style="border-radius: 35px;" type="email"-->
		<!--							name="email" placeholder="Email" title="Your Email"/>-->
		<!--					</div>-->
		<!--					<div>-->
		<!--						<input class="input-text required-field" style="border-radius: 35px;" type="text" name="phone"-->
		<!--							placeholder="Phone number"/>-->
		<!--					</div>-->
		<!--					<div>-->
		<!--						<div class="row">-->
		<!--							<div class="col-sm-3 text-white">-->
		<!--								<input type="radio"  name="rating" value="Very good">-->
		<!--								<label for="Very good">Very good</label><br>-->
		<!--							</div>-->
		<!--							<div class="col-sm-2 text-white">-->
		<!--								<input type="radio"  name="rating" value="Good">-->
		<!--								<label for="Good">Good</label><br>-->
		<!--							</div>-->
		<!--							<div class="col-sm-2 text-white">-->
		<!--								<input type="radio"  name="rating" value="Average">-->
		<!--								<label for="Average">Average</label>-->
		<!--							</div>-->
		<!--							<div class="col-sm-2 text-white">-->
		<!--								<input type="radio" name="rating" value="poor">-->
		<!--								<label for="poor">poor</label>-->
		<!--							</div>-->
		<!--							<div class="col-sm-3 text-white">-->
		<!--								<input type="radio"  name="rating" value="Very poor">-->
		<!--								<label for="Very poor">Very poor</label>-->
		<!--							</div>-->
		<!--						</div>-->
		<!--					</div>-->
		<!--					<div>-->
		<!--						<textarea class="input-text required-field" style="border-radius: 35px;" name="feedback"-->
		<!--							placeholder="Feedback" title="Your Feedback"></textarea>-->
		<!--					</div>-->
		<!--				<form action="submit">-->
		<!--					<button type="submit" class="btn text-white" style="background-color: #F68C1F">SUBMIT</button>-->
		<!--				</form>-->
		<!--				</form>-->
		<!--			</div>-->
		<!--			<div class="col-md-6 col-lg-6 mt-3">-->
		<!--				<img src="{{asset('comimages/apsc/c-1.jpg')}}" style="border-radius: 35px;" alt="Buy this Course">-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</div>-->
	</section>

</main>
<!-- Modal -->
@endsection
@section('footer')
@include('partials.footer')
@endsection
@section('scripts')
<script src="{{asset('js/hjs/modernizr-2.8.3.min.js')}}"></script>
<!-- Google -->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<!-- jquery latest version -->
<script src="{{asset('js/hjs/jquery.min.js')}}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{asset('js/hjs/bootstrap.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
<!-- Menu js -->
<script src="{{asset('js/hjs/rsmenu-main.js')}}"></script>
<!-- op nav js -->
<script src="{{asset('js/hjs/jquery.nav.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('js/hjs/owl.carousel.min.js')}}"></script>
<!-- Slick js -->
<script src="{{asset('js/hjs/slick.min.js')}}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{asset('js/hjs/isotope.pkgd.min.js')}}"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{asset('js/hjs/imagesloaded.pkgd.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('js/hjs/wow.min.js')}}"></script>
<!-- Skill bar js -->
<script src="{{asset('js/hjs/skill.bars.jquery.js')}}"></script>
<script src="{{asset('js/hjs/jquery.counterup.min.js')}}"></script>
<!-- counter top js -->
<script src="{{asset('js/hjs/waypoints.min.js')}}"></script>
<!-- video js -->
<script src="{{asset('js/hjs/jquery.mb.YTPlayer.min.js')}}"></script>
<!-- magnific popup js -->
<script src="{{asset('js/hjs/jquery.magnific-popup.min.js')}}"></script>
<!-- tilt js -->
<script src="{{asset('js/hjs/tilt.jquery.min.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('js/hjs/plugins.js')}}"></script>
<!-- contact form js -->
<script src="{{asset('js/hjs/contact.form.js')}}"></script>
<!-- main js -->
<script src="{{asset('js/hjs/main.js')}}"></script>
<script src='{{asset("js/jquery-3.4.1.min.js")}}'></script>
<script src='{{asset("js/main.js")}}'></script>
<script src='{{asset("js/bootstrap.min.js")}}'></script>
<script src='{{asset("js/slick.min.js")}}'></script>
<script src='{{asset("js/jquery.fancybox.pack.js")}}'></script>
<script src='{{asset("js/jquery.magnific-popup.min.js")}}'></script>
<script src='{{asset("js/waypoints.min.js")}}'></script>
<script src='{{asset("js/jquery.counterup.min.js")}}'></script>

<script src="{{asset('js/ujs/jquery.min.js')}}"></script>
<script src="{{asset('js/ujs/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/ujs/popper.min.js')}}"></script>
<script src="{{asset('js/ujs/bootstrap.min.js')}}"></script>
<script src="{{asset('js/ujs/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/ujs/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/ujs/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/ujs/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/ujs/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/ujs/aos.js')}}"></script>
<script src="{{asset('js/ujs/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/ujs/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="{{asset('js/ujs/main.js')}}"></script>




@endsection