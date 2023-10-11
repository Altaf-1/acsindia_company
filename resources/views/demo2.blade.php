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
    {{--    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">--}}
    <!-- Magnific Popup core CSS file -->
    {{--    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">--}}
    
    
@endsection
@section('styles')
    <style>
        {{--for the large screen--}}
      @media only screen and (max-width: 1920px) {
            .bg-home-ome1 {
                background: url({{asset('comimages/headimg.webp')}}) no-repeat center;
                background-size: cover;
            }
        }

        @media only screen and (max-width: 1044px) {
            .bg-home-ome1 {
                background: url({{asset('comimages/headimg.webp')}}) no-repeat;
            }
        }

        #testimonials {
            background-image: url({{asset('comimages/brk1.webp')}});
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .count {
            text-align: left;
            margin-top: 0px;
            color:red;

        }
            @media screen and (max-width: 426px) {
            .bg-home-ome1 {
                background: url({{asset('comimages/mobile-img.png')}}) no-repeat ;
                background-size: 100% 100%;
            }
            .mobile-center{
                text-align:center!important;
            }
            button {
 position: relative;
 display: block;
 text-decoration: none;
 text-transform: uppercase;
 width: 100px;
 overflow: hidden;
 border-radius: 40px;
 border: none;
 margin-left: 10px;
}

button span {
 position: relative;
 color: #fff;
 fot-size: 20px;
 font-family: Arial;
 letter-spacing: 5px;
 z-index: 1;
}

button .liquid {
 position: absolute;
 top: -80px;
 left: 0;
 width: 100px;
 height: 200px;
 background: #1abc9c;
 box-shadow: inset 0 0 50px rgba(0, 0, 0, .5);
 transition: .5s;
}

button .liquid::after,
button .liquid::before {
 content: '';
 width: 100px;
 height: 200%;
 position: absolute;
 top: 0;
 left: 50%;
 transform: translate(-50%, -75%);
 background: #fff;
}

button .liquid::before {
 border-radius: 45%;
 background: rgba(20, 20, 20, 1);
 animation: animate 5s linear infinite;
}

button .liquid::after {
 border-radius: 40%;
 background: rgba(20, 20, 20, .5);
 animation: animate 10s linear infinite;
}

button:hover .liquid {
 top: -120px;
}

@keyframes animate {
 0% {
  transform: translate(-50%, -75%) rotate(0deg);
 }

 100% {
  transform: translate(-50%, -75%) rotate(360deg);
 }
}
        }


/*.slider-bg1 {*/
/*    background: url("../img/hero-1.png") no-repeat;*/
/*   background-size: 100% 100%;*/
/*}*/

/*<!--.slider-bg2 {-->*/
/*    <!--background: url("../img/hero-2.jpg") no-repeat;-->*/
/*    <!--background-size: 100% 100%;-->*/

/*}*/

/*.slider-bg3 {*/
/*    background: url("../img/hero-3.png") no-repeat;*/
/*    background-size: 100% 100%;*/

/*}*/

/*.slider-bg4 {*/
/*    background: url("../img/hero-4.png") no-repeat;*/
/*  background-size: 100% 100%;*/

/*}*/
/*@media screen and (max-width: 426px) {*/
/*    .slider-bg1 {*/
/*        background: url('../img/hero-1-small.png') no-repeat;*/
/*        background-size: 100% 100%;*/
/*    }*/
/*    <!--.slider-bg2 {-->*/
/*        <!--background: url("../img/hero-2-small.png") no-repeat;-->*/
/*         <!--background-size: 100% 100%;-->*/

/*    }*/

/*    .slider-bg3 {*/
/*        background: url("../img/hero-3-small.png") no-repeat;*/
/*        background-size: 100% 100%;*/

/*    }*/

/*    .slider-bg4 {*/
/*        background: url("../img/hero-4-small.png") no-repeat;*/
/*        background-size: 100% 100%;*/

/*    }*/
/*}*/

        /*.course-img {*/
        /*    width: 100%;*/
        /*    max-height: 200px;*/
        /*    object-fit: cover;*/
        /*}*/
          marquee {
            font-size: 30px;
            font-weight: 800;
            color: #e67300;
            font-family: sans-serif;
            padding-top:15px;
        }
        /*div h1 h2 h3 h4 {*/
            
        /*    animation-duration: 12s;*/
        /*        }*/
        .whatsapp_float{
            position: fixed;
            bottom:40px;
            right:20px;
            z-index: 1000;
        }
        
        button {
 position: relative;
 display: block;
 text-decoration: none;
 text-transform: uppercase;
 width: 200px;
 overflow: hidden;
 border-radius: 40px;
 border: none;
}

button span {
 position: relative;
 color: #fff;
 fot-size: 20px;
 font-family: Arial;
 letter-spacing: 5px;
 z-index: 1;
}

button .liquid {
 position: absolute;
 top: -80px;
 left: 0;
 width: 250px;
 height: 200px;
 background: #1abc9c;
 box-shadow: inset 0 0 50px rgba(0, 0, 0, .5);
 transition: .5s;
}

button .liquid::after,
button .liquid::before {
 content: '';
 width: 200%;
 height: 200%;
 position: absolute;
 top: 0;
 left: 50%;
 transform: translate(-50%, -75%);
 background: #fff;
}

button .liquid::before {
 border-radius: 45%;
 background: rgba(20, 20, 20, 1);
 animation: animate 5s linear infinite;
}

button .liquid::after {
 border-radius: 40%;
 background: rgba(20, 20, 20, .5);
 animation: animate 10s linear infinite;
}

button:hover .liquid {
 top: -120px;
}

@keyframes animate {
 0% {
  transform: translate(-50%, -75%) rotate(0deg);
 }

 100% {
  transform: translate(-50%, -75%) rotate(360deg);
 }
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
    @endif
    <!-- header area start -->
    <header id="header" class="transparent-header">
        <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
    </header>

    <main>
        <div class="whatsapp_float">
            <a href="https://wa.me/917099032473" target="_blank"><img src="{{asset('comimages/whatsapp.png')}}" width="80px" class="whatsapp_float_btn"/></a>
        </div>
         <!--header content area start  position-center-->
        <div class="header-content position-left bg-home-ome1 col-sm-12" role="banner">
             <!--.container -->
            <div class="container">
                 <!--.row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 header-area">
                        <div class="header-area-inner header-text pt-5">
                            <div><h3 class="text-white mobile-center">Countdown begins for IAS 2022 PRELIMS</h3>
                            <h1 id="demo" class="count mobile-center" style="color:#e08207;"></h1></div>
                             <!--single content header -->
                            <div class="mobile-center mt-3"><span data-aos="fade-down " data-aos-delay="500" class="subtitle ">Welcome to</span></div>
                            <h1 data-aos="fade-right" class="title mobile-center"><span class="base-color ml2 bg-white">&nbsp;Academy of Civil Services&nbsp;</span></h1>
                            <h3 data-aos="fade-down" class="text-white mobile-center">Be the Best - Be the Change</h3>
                            <!--<p>Learn from any location in the world. Study at a time and place that suits your schedule. Take complete control over your education.-->
                            <!--{{--                        </p>--}}-->
                            <!--<div class="btn-section">-->
                            <!--    <a data-aos="fade-right" class=" btn-custom">Demo Class <i class="fas fa-arrow-right"></i></a>-->
                            <!--    <div class="video-relative" data-aos="fade-left">-->
                            <!--        <a href="{{asset('https://www.youtube.com/channel/UCOs-olyxhFwKLyz353n5kgw')}}"-->
                            <!--           class="video-btn"-->
                            <!--           target="_blank">-->
                                        <!--https://www.youtube.com/channel/UCOs-olyxhFwKLyz353n5kgw" class="video-btn" target="_blank-->
                            <!--            <i class="fas fa-play"></i>-->
                            <!--            <span class="ripple orangebg"></span>-->
                            <!--            <span class="ripple orangebg"></span>-->
                            <!--            <span class="ripple orangebg"></span>-->
                            <!--        </a>-->
                            <!--    </div>-->
                            <!--</div>-->
                              <!--<a href="{{route('ias.exam.show','IAS EXAM 2021')}}" class="mt-2 color-two btn btn-primary text-white">IAS EXAM 2021</a>-->
                            <!--<a href="{{asset('upsc_answer_key_2021')}}" class="mt-5 color-two btn btn-primary text-white ">UPSC 2021 ANSWER KEY & MARKS CALCULATOR</a>-->
                            <!--<img src="{{asset('comimages/new1.gif')}}" width="60" height="25">-->
                        <br>
                        <!--<a href="{{route('free.new.video.main.topic','DEMO CLASSES')}}"
                               class="color-two  btn btn-primary text-white mt-2">Demo Classes</a>-->
                        <!--Join Webinar    <br>-->
                            <!--<div>-->
                            <!--    <img src="{{asset('comimages/new1.gif')}}" width="60" height="25">-->
                            <!--<h3 class="text-white pt-4">All India IAS Mock Test 2022 Final Result</h3>-->
                            
                                <!--<a href="https://drive.google.com/file/d/1YhUQhBLb8aA5toCVc5g7ir2AegIwr8iz/view?usp=sharing" class="color-two btn-custom smooth-scroll text-center">All India IAS Mock Test 2022 Final Result</a>-->
                                <!--<a href="https://drive.google.com/file/d/1YhUQhBLb8aA5toCVc5g7ir2AegIwr8iz/view?usp=sharing" class=" btn color-two button text-white " target="_blank">All India IAS Mock Test 2022 Final Result</a><br>-->
                                <!--<a href="https://drive.google.com/file/d/1oYpKxlEYkcrpZD2P6sI3BiRSHK4PrXKw/view?usp=sharing" class=" btn color-two button text-white mt-4" target="_blank">Answer Key</a>-->
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                 <!--.row end -->
            </div>
             <!--.container end -->
        </div>
        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
            <!-- slider item 1 -->
        <!--    <ol class="carousel-indicators">-->
        <!--        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
                <!--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
        <!--        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
        <!--        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>-->
        <!--    </ol>-->
        <!--    <div class="carousel-inner">-->
        <!--        <div class="carousel-item active">-->

        <!--                <div class="header-content slider-bg1" role="banner">-->
        <!--                    <div class="container">-->
        <!--                        <div class="row">-->
        <!--                            <div class="col-xs-12 col-sm-12 header-area">-->

        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--        </div>-->
                <!--<div class="carousel-item">-->
                    <!-- slider item 2 -->
                        <!--<div class="header-content slider-bg2" role="banner">-->
                        <!--</div>-->
                <!--</div>-->
        <!--        <div class="carousel-item">-->
                    <!-- slider item 3 -->
        <!--                <div class="header-content slider-bg3" role="banner">-->
        <!--                </div>-->
        <!--        </div>-->
        <!--        <div class="carousel-item">-->
                    <!-- slider item 3 -->
        <!--                <div class="header-content slider-bg4" role="banner">-->
        <!--                </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        <marquee scrollamount="15">THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE
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
        <!-- end header content area start -->
        <!-- why-us area start -->
        <div class="m-4">
            <div class="row">
                <div data-aos="fade-right" class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-5 why-us-left-bg">
                    <img style="height:450px; width:800px" target="_blank" src="{{asset('comimages/about1.webp')}}"/></a>
                    <!-- Button trigger modal -->
                    <!--<button type="button" class="p-0 border-0" data-toggle="modal" data-target="#exampleModalCenter">
                        <img style="height:450px; width:700px" target="_blank"
                             src="{{asset('comimages/web.gif')}}"/></a>

                    </button>-->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-7 wrap-padding">
                    <div class="section-title">
                        <div>
                            <h4 data-aos="fade-down" style="background-color:#1abc9c;" class="text-center text-white p-2"><strong>VISION</strong></h4>
                            <h4 data-aos="fade-left">Aspirations of Academy of Civil Services move hand in hand with the Indian Civil Services Aspirants.
                            Success of each aspirant is our priority. We believe in pure ethical form of service, with zero tolerance in quality
                            learning at an affordable price for each fellow Indian.</h4><br>
                            <h4 data-aos="fade-down" style="background-color:#1abc9c;" class="text-center text-white p-2"><strong>MISSION</strong></h4>
                            <h4 data-aos="fade-left">Our each session starts with a mission to promote smart work, patience and perseverance among the students.
                             We pledge to give guidance to our aspirants till they land in success</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="m-0">-->
        <!--    <div class="row">-->
        <!--        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12 justify-content-center">-->
        <!--            <img src="{{asset('img/mission.png')}}" style="width:100%"/>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- why-us area end -->
        <!-- features area start -->
        <div class="justify-content-center container pb-3" data-aos="fade-right">
            <!--<a href="https://drive.google.com/file/d/1ENBUdfrN-O7bxFQLwKz3ytfqQJu-VcL7/view?usp=sharing" class=" btn color-two button text-white">READ OUR ACS WISDOM</a>-->
            <form action="https://drive.google.com/file/d/1ENBUdfrN-O7bxFQLwKz3ytfqQJu-VcL7/view?usp=sharing">
                <button type="submit" style="width:250px;">
                    <span>ACS WISDOM</span>
                    <div class="liquid"></div>
                </button>
            </form>
        </div>

        <!--<div id="features" class="wrap-bg container-fluid">-->
        <div id="features" class="wrap-bg container-fluid pt-0 pb-4 " style="background-image: url({{asset('comimages/cir.webp')}});">
            <!-- .container -->
            <div class="container-fluid p-0">
                <div style="background-color:#1abc9c;" class="post-heading-center section-title mb-60 container-fluid p-2">
                    <h2 data-aos="fade-right" class="text-white ml2">Knowledge Center for IAS 
  </h2>
                    <h4 data-aos="fade-left" class="text-white">click below</h4>
                </div>
                <!-- .row -->
                <div class="row container m-auto">
                    <div data-aos="fade-right" class="col-xs-12 col-sm-12 col-md-3">
                        <!-- 1 -->
                        <div class="single-features-light text-center bg-light">
                            <!-- single features -->
                            <div class="move">
                                <!-- uses solid style -->
                                <img class="text-danger" style="width:90px" src="{{asset('comimages/book.gif')}}">
                                <a href="/acsall"><h4 class="font-weight-bold" style="color:#e08207;" >ACS DIGIPEDIA</h4></a>
                                <p>Download Free IAS Resources.</p>
                                <div class="feature_link">
                                    <a href="/acsall">Click here <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div data-aos="fade-up" class="col-xs-12 col-sm-12 col-md-3">
                        <!-- 2 -->
                        <div class="single-features-light text-center bg-light">
                            <!-- single features -->
                            <div class="move">
                                <img class="text-danger" style="width:90px" src="{{asset('comimages/computer.gif')}}">
                                <a href="{{route('dailynewsanalyse.index')}}"><h4 class=" font-weight-bold" style="color:#e08207;">
                                      Daily News Analysis</h4></a>
                                <p class="text-dark">Stay Updated.</p>
                                <div class="feature_link">
                                    <a href="{{route('dailynewsanalyse.index')}}">Click here <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div data-aos="fade-down" class="col-xs-12 col-sm-12 col-md-3 ">
                        <!-- 3 -->
                        <div class="single-features-light text-center bg-light">
                            <!-- single features -->
                            <div class="move">
                                <img class="secondary-color" style="width:90px" src="{{asset('comimages/gears.gif')}}">
                                <a href="/currentaffairs"><h4 class="font-weight-bold" style="color:#e08207;">CURRENT AFFAIRS 2021</h4></a>
                                <p>Know how to crack the civil services exam.</p>
                                <div class="feature_link">
                                    <a href="/currentaffairs">Click here <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div data-aos="fade-left" class="col-xs-12 col-sm-12 col-md-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center bg-light">
                            <!-- single features -->
                            <div class="move">
                                <img class="secondary-color" style="width:90px" src="{{asset('comimages/home.gif')}}">
                                <a href="/resultsias"><h4 class="font-weight-bold" style="color:#e08207;">TEST RESULTS</h4></a>
                                <p>List of the rank holders.</p>
                                <div class="feature_link">
                                    <a href="/resultsias">Click here <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- features area end -->
        <!-- courses area start -->
        <section id="ourcourses">
            <div  id="courses" class="wrap-bg wrap-bg-dark pt-0 pb-0" style="background-image: url({{asset('comimages/book.jpg')}});>
                <div class="container-fluid">
                    <div style="background-color:#1abc9c;" class="row justify-content-center text-center p-2 ">
                        <div class="col-lg-8">
                            <div class="section-title with-p text-white mb-0 p-3">
                                <h2 data-aos="fade-left" class="mb-0">Popular Courses</h2>
                                <h4 data-aos="fade-right" class="text-white">Your civil services dream is a click away!</h4>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->
                    <div class="row justify-content-center p-2 mt-2  " style="padding-bottom:0">
                    <!-- <div class="col-xs-12 col-sm-12 col-md-6 p-2 col-lg-6 course-animation   mb20"> -->
                            <!-- 1 -->
                            <!--<div class="themeioan_course">-->
                                <!--<article>-->
                                    <!-- single course -->
                                    <!--<div class="blog-photo">-->
                                        <!--<a href="{{route('ias.advanced.courses.index')}}"><img src="comimages/advancenew.webp" alt=""></a>-->
                                    <!--</div>-->
                                    <!--<div class="blog-content">-->
                                        <!--<h5 class="title">IAS ADVANCED COURSES</h5>-->
                                        <!--<ul class="themeioan_ul_icon">-->
                                            <!--<li><i class="fas fa-check-circle"></i>Live Online Classes</li>-->
                                            <!--<li><i class="fas fa-check-circle"></i>Q&A Session With Materials</li>-->
                                        <!--</ul>-->
                                        <!--<ul class="course-bottom-list justify-content-end">-->
                                            <!--<li>-->
                                                <!--<div class="course-duration">-->
                                                    <!--<span class="fa fa-clock-o"></span>-->
                                                    <!--<span>2h 38m</span>-->
                                                    <!--<a href="{{route('ias.advanced.courses.index')}}" class=" btn color-two button text-white" >VIEW ALL</a>-->
                                                <!--</div>-->
                                            <!--</li>-->
                                        <!--</ul>-->
                                    <!--</div>-->
                                <!--</article>-->
                                <!-- end single course -->
                            <!--</div>-->
                        <!--</div>-->
                        @foreach($courses as $course)
                            <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-2 course-animation  mb20">
                                <!-- 2 -->
                                <div class="themeioan_course">
                                    <article>
                                        <!-- single course -->
                                        <div class="blog-photo ">
                                          <img class="img-fluid course-img"
                                                            src="{{asset('storage/'.$course->image)}}" style="height:320px" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <h5 class="title">{{$course->title}}</h5>
                                            <ul class="themeioan_ul_icon">
                                                <li><i class="fas fa-check-circle"></i> Live Online Classes
                                                </li>
                                                <li><i class="fas fa-check-circle"></i> Lifetime Accessible Account
                                                </li>
                                                <li><i class="fas fa-check-circle"></i> Free Mains Coaching After Clearing the Prelims. </li>
                                                <li><i class="fas fa-check-circle"></i> Free Interview Training After Clearing the Mains. </li>
                                            </ul>
                                            <ul class="course-bottom-list justify-content-center">
                                                <li>
                                                    <div class="course-duration">
                                                        <span class="fa fa-clock-o"></span>
                                                        <form action="{{route('course.show', $course->slug)}}">
                                                            <button type="submit" style="width:250px;">
                                                            <span>ENROLL</span>
                                                            <div class="liquid"></div>
                                                            </button>
                                                        </form>
                                                        <!--<a href="{{route('course.show', $course->slug)}}"-->
                                                        <!--   class=" btn color-two button text-white">ENROLL</a>-->
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <!-- end single course -->
                                </div>
                            </div>
                        @endforeach
                           @foreach($recorded_courses as $course)
                            <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-2 course-animation  mb20">
                                <!-- 2 -->
                                <div class="themeioan_course">
                                    <article>
                                        <!-- single course -->
                                        <div class="blog-photo ">
                                          <img class="img-fluid course-img"
                                                            src="{{asset('storage/'.$course->image)}}" style="height:320px" alt="">
                                        </div>
                                        <div class="blog-content">
                                           
                                                <h5 class="title">{{$course->title}}</h5>
                                        <ul class="themeioan_ul_icon">
                                             {!! $course->front_options !!}
                                        </ul>
                                         
                                            <ul class="course-bottom-list justify-content-center">
                                                <li>
                                                    <div class="course-duration">
                                                        <span class="fa fa-clock-o"></span>
                                                        <form action="{{route('recorded.show', $course->slug)}}">
                                                            <button type="submit" style="width:250px;">
                                                            <span>ENROLL</span>
                                                            <div class="liquid"></div>
                                                            </button>
                                                        </form>
                                                        <!--<a href="{{route('recorded.show', $course->slug)}}"-->
                                                        <!--   class=" btn color-two button text-white">ENROLL</a>-->
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <!-- end single course -->
                                </div>
                            </div>
                        @endforeach
                        
                      <!--<div class="col-xs-12 col-sm-12 col-md-6 p-2 col-lg-6 course-animation   mb20">-->
                            <!-- 1 -->
                      <!--   <div class="themeioan_course">-->
                      <!--          <article>-->
                                     <!--single course -->
                      <!--              <div class="blog-photo">-->
                      <!--                  <a href=""><img src="comimages/newrec.png" alt="" "></a>-->
                      <!--              </div>-->
                      <!--              <div class="blog-content">-->
                      <!--                  <h5 class="title">RECORDED ADVANCED BATCH</h5>-->
                      <!--                  <ul class="themeioan_ul_icon">-->
                      <!--                      <li><i class="fas fa-check-circle"></i> Recorded Online Classes</li>-->
                      <!--                      <li><i class="fas fa-check-circle"></i> Free Hardcopy, Study Materials </li>-->
                      <!--                  </ul>-->
                      <!--                  <ul class="course-bottom-list justify-content-end">-->
                      <!--                      <li>-->
                      <!--                          <div class="course-duration">-->
                      <!--                              <span class="fa fa-clock-o"></span>-->
                      <!--                              <span>2h 38m</span>-->
                      <!--                              <a href="{{route('recorded.courses.index')}}" class=" btn color-two button text-white" >VIEW ALL</a>-->
                      <!--                          </div>-->
                      <!--                      </li>-->
                      <!--                  </ul>-->
                      <!--              </div>-->
                      <!--          </article>-->
                      <!--      </div>-->
                      <!--          </div>-->
                                <!-- end single course -->
                                  <div class="col-xs-12 col-sm-12 col-md-6 p-2 col-lg-6 course-animation   mb20">
                                <!-- 1 -->
                                <div class="themeioan_course">
                                    <article>
                                        <!-- single course -->
                                        <div class="blog-photo">
                                            <a href="{{route('apsc.courses.index')}}"><img src="{{asset('comimages/apcsnew.webp')}}" style="height:320px" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <h5 class="title">APSC FULL COURSE</h5>
                                            <ul class="themeioan_ul_icon">
                                                <li><i class="fas fa-check-circle"></i> Live Online Classes</li>
                                                <li><i class="fas fa-check-circle"></i> Lifetime Accessible Account
                                                </li>
                                                <li><i class="fas fa-check-circle"></i> Q&A Session With Materials </li>
                                            </ul>
                                            <ul class="course-bottom-list justify-content-center">
                                                <li>
                                                    <div class="course-duration">
                                                        <span class="fa fa-clock-o"></span>
                                                        <!--<span>2h 38m</span>-->
                                                        <form action="{{route('apsc.courses.index')}}">
                                                            <button type="submit" style="width:250px;">
                                                            <span>ENROLL</span>
                                                            <div class="liquid"></div>
                                                            </button>
                                                        </form>
                                                        <!--<a href="{{route('apsc.courses.index')}}" class=" btn color-two button text-white" >ENROLL</a>-->
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <!-- end single course -->
                                </div>
                            </div>
                            </div>
                        </div>
                       
                            
                      
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- courses area end -->
        <!-- teachers area start -->
        <section id="ourteam">
            <div id="teachers" class="wrap-bg wrap-bg-dark pt-0">
                <div class="container-fluid">
                    <div style="background-color:#1abc9c;" class="row justify-content-center text-center">
                        <div class="col-lg-8">
                            <div class="section-title with-p text-white mb-0 p-4">
                                <h2 data-aos="fade-right" class="mb-0">Meet Our Professional Team</h2>
                            </div>
                        </div>
                    </div><br>
                    <div class="row carousel-slider gallery-slider">
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
                                <img src="{{asset('comimages/Sajid.webp')}}" alt="Image 2"/></a>
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
                                <img src="{{asset('comimages/shramana1.webp')}}" alt="Image 3"/></a>
                                <h5>Shramana Sarma Roy</h5>
                                <span>Content & Class Management</span>
                            </article>
                            <!-- end single teacher -->
                        </div>
                        
                        <div class="col-sm-3">
                            <article class="item">
                                <!-- single teacher -->
                                <img src="{{asset('comimages/altaf1.webp')}}" alt="Image 3"/></a>
                                <h5>Altaf Hussain</h5>
                                <span>Chief Technology Officer</span>
                            </article>
                            <!-- end single teacher -->
                        </div>
                        <div class="col-sm-3">
                            <article class="item">
                                <!-- single teacher -->
                                <img src="{{asset('comimages/sahid.webp')}}" alt="Image 3"/></a>
                                <h5>Sahid parvez</h5>
                                <span>Academic Counsellor</span>
                            </article>
                            <!-- end single teacher -->
                        </div>
                        <div class="col-sm-3">
                            <article class="item">
                                <!-- single teacher -->
                                <img src="{{asset('comimages/gitanjali1.webp')}}" alt="Image 3"/></a>
                                <h5>Gitanjali Mech</h5>
                                <span>Academic Counsellor</span>
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
                                <img src="{{asset('comimages/nisha.jpeg')}}" alt="Image 3"/></a>
                                <h5>Nisha Sonar</h5>
                                <span>Academic Counsellor</span>
                            </article>
                            <!-- end single teacher -->
                        </div>
                        <div class="col-sm-3">
                            <article class="item">
                                <!-- single teacher -->
                                <img src="{{asset('comimages/disha.jpg')}}" alt="Image 3"/></a>
                                <h5>Disha Saikia</h5>
                                <span>Academic Counsellor</span>
                            </article>
                            <!-- end single teacher -->
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- teachers area end -->
        <!-- testimonials area start -->
        <section id="review">
            <div id="testimonials" class="wrap-bg">
                <div class="container">
                    <div class="row">
                        <div  class="col-lg-12">
                            <div class="section-title text-center">
                                <h2  class="mb-0 text-white">Students Review</h2>
                            </div>
                        </div>
                        <div class="col-lg-8 center-column">
                            <div class="carousel-slider general-slider">
                                <div class="col-sm-3">
                                    <!-- 1 -->
                                    <div class="themeioan_testimonial">
                                        <!-- single testimonial item -->
                                        <img src="{{asset('comimages/depan.webp')}}" alt="Avatar"/>
                                        <div class="testimonail-content">
                                            <div class="testimonial-text text-center">
                                                <h4>Bipanshi Shyam</h4>
                                                <p>"At first I want to thanks ACS to give us the opportunity to fulfill
                                                    our dreams .
                                                    It is excellent teaching centre for me . They not only teach us but
                                                    also motivated too.
                                                    I am very thankful to you sir. I am very happy to be a part of this
                                                    Academy."</p>
                                            </div>
                                            <div class="testimonial-author text-center">
                                                <div class="course-star">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                                </div>
                                                <p>STUDENT</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end single testimonial item -->
                                </div>
                                <div class="col-sm-3">
                                    <!-- 2 -->
                                    <div class="themeioan_testimonial">
                                        <!-- single testimonial item -->
                                        <img src="{{asset('comimages/dib.webp')}}" alt="Avatar"/>
                                        <div class="testimonail-content text-center">
                                            <h4>Dibyajyoti Hazarika</h4>
                                            <div class="testimonial-text text-center">
                                                <p>"It's a great platform for working aspirant. online lectures by
                                                    qualified
                                                    teacher know how to make it simple and concise manner. You no need
                                                    to
                                                    be a
                                                    scholar but know everything in exam point of view and this
                                                    platform give you the perfect idea."</p>
                                            </div>
                                            <div class="testimonial-author text-center">
                                                <div class="course-star">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i>
                                                </div>
                                                <p>STUDENT</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end single testimonial item -->
                                </div>
                                <div class="col-sm-3">
                                    <!-- 3 -->
                                    <div class="themeioan_testimonial">
                                        <!-- single testimonial item -->
                                        <img src="{{asset('comimages/mona.webp')}}" alt="Avatar"/>
                                        <div class="testimonail-content text-center">
                                            <h4>Monalisha Deori</h4>
                                            <div class="testimonial-text text-center">
                                                <p>"All the teachers and the organizers
                                                    (best teachers of the country) are very dedicated and
                                                    hard-working.Trying and facilitating the
                                                    best they can provide the students for APSC as well as UPSC."</p>
                                            </div>
                                            <div class="testimonial-author text-center">
                                                <div class="course-star">
                                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                        class="fas fa-star"></i>
                                                </div>
                                                <p>STUDENT</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end single testimonial item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials area end -->
        <!-- counter area start -->
        <section id="progress">
            <div id="counter" class="wrap-bg wrap-bg-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <!-- #counter -->
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="info">
                                        <!-- 1 -->
                                        <div class="themeioan_counter text-center">
                                            <!-- single counter item -->
                                            <img class="secondary-color" style="width:90px" src="{{asset('comimages/people.gif')}}">
                                            <h4 style="color:#fc9003;">2493</h4>
                                            <p class="text-dark">Students</p>
                                        </div>
                                        <!-- end single counter item -->
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <!-- .row -->
                                    <div class="info">
                                        <!-- 2 -->
                                        <div class="themeioan_counter text-center">
                                            <!-- single counter item -->
                                            <img class="secondary-color" style="width:90px" src="{{asset('comimages/course.gif')}}">
                                            <h4 style="color:#fc9003;">21</h4>
                                            <p class="text-dark">Courses</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="info">
                                        <!-- 3 -->
                                        <div class="themeioan_counter text-center">
                                            <!-- single counter item -->
                                            <img class="secondary-color" style="width:90px" src="{{asset('comimages/people.gif')}}">
                                            <h4 style="color:#fc9003;">5</h4>
                                            <p class="text-dark">Certified Teachers</p>
                                        </div>
                                        <!-- end single counter item -->
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="info">
                                        <!-- 4 -->
                                        <div class="themeioan_counter text-center">
                                            <!-- single counter item -->
                                            <img class="secondary-color" style="width:90px" src="{{asset('comimages/trophy.gif')}}">
                                            <h4 style="color:#fc9003;">4</h4>
                                            <p class="text-dark">Award Winning</p>
                                        </div>
                                        <!-- end single counter item -->
                                    </div>
                                </div>
                                <!-- .row end -->
                                <!-- #counter area end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter area end -->
         <!-- events area start -->
        <section id="event">
            <div id="events" class="wrap-bg pt-0 pb-3" style="background-image: url({{asset('comimages/event12.webp')}});">
                
            <div class="row justify-content-center text-center container-fluid">
            <div class="col-lg-12">
                <div class="section-title justify-content ">
                    <h2 style="background-color:#1abc9c;" class="text-uppercase text-white p-3">Upcoming Events</h2>
                </div>
                        
            </div>
                <div class="container">
                    <!-- .row -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 course-single mb20">
                            <!-- 1 -->
                            <div class="themeioan_event">
                                <article>
                                    <!-- single event start -->
                                    <div class="event-photo">
                                        <div class="date">
                                            <h4><span>28</span> Nov, 2021</h4>
                                        </div>
                                        <img src="{{asset('comimages/eventias.webp')}}" alt="">
                                    </div>
                                    <div class="event-content">
                                        <h5 class="title">IAS WEBINAR</h5>
                                        <!--<ul class="themeioan_ul_icon">
                              <li><i class="fas fa-check-circle"></i> Automated Software</li>
                              <li><i class="fas fa-check-circle"></i> Experience Design</li>
                              <li><i class="fas fa-check-circle"></i> Automated Software</li>
                              </ul>-->
                                        <div class="course-viewer">
                                            <ul>
                                                <li class="text-dark"><i class="fas fa-calendar-alt"></i> 28 Nov, 2021</li>
                                                <li class="text-dark"><i class="fas fa-clock "></i> 7:00 PM - 8:00 PM</li>
                                                <li class="text-dark"><i class="fas fa-map"></i> ONLINE</li>
                                            </ul>
                                        </div>
                                        <div class="btn-section text-center">
                                            <form action="https://us06web.zoom.us/webinar/register/6316376526019/WN_yZXXjE1ySsOgkOS1X4uLpg">
                                                            <button type="submit" style="width:250px;">
                                                            <span>Book Now</span>
                                                            <div class="liquid"></div>
                                                            </button>
                                                        </form>
                                            <!--<a href="https://us06web.zoom.us/webinar/register/6316376526019/WN_yZXXjE1ySsOgkOS1X4uLpg" target="_blank" class="color-two btn-custom smooth-scroll">Book Now <i class="fas fa-arrow-right"></i></a>-->
                                        </div>
                                    </div>
                                </article>
                                <!-- single event end-->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 course-single mb20">
                            <!-- 2 -->
                            <div class="themeioan_event">
                                <article>
                                    <!-- single event start -->
                                    <div class="event-photo">
                                        <div class="date">
                                            <h4><span>9</span> Jan, 2022</h4>
                                        </div>
                                        <img src="{{asset('comimages/event1.webp')}}" alt="">
                                    </div>
                                    <div class="event-content">
                                        <h5 class="title"><a href="">UPSC WORKSHOP</a></h5>
                                        <!--<ul class="themeioan_ul_icon">
                              <li><i class="fas fa-check-circle"></i> Content Engineering</li>
                              <li><i class="fas fa-check-circle"></i> Product Development</li>
                              <li><i class="fas fa-check-circle"></i> Data Structuring</li>
                              </ul>-->
                                        <div class="course-viewer">
                                            <ul>
                                                <li class="text-dark"><i class="fas fa-calendar-alt"></i>9 - 12 Jan, 2022</li>
                                                <li class="text-dark"><i class="fas fa-clock"></i> 7:30 PM - 8:30 PM</li>
                                                <li class="text-dark"><i class="fas fa-map"></i> ONLINE</li>
                                            </ul>
                                        </div>
                                        <div class="btn-section">
                                            <form action="https://us06web.zoom.us/webinar/register/4216412094609/WN_ofHFcXxvRe-afODjkF0Mkg">
                                                            <button type="submit" style="width:250px;">
                                                            <span>Book Now</span>
                                                            <div class="liquid"></div>
                                                            </button>
                                                        </form>
                                            <!--<a href="https://us06web.zoom.us/webinar/register/3816381684996/WN_m4TZIqRSRJujKNow2v2gjA"  target="_blank" class="color-two btn-custom smooth-scroll">Book Now <i class="fas fa-arrow-right"></i></a>-->
                                        </div>
                                    </div>
                                </article>
                                <!-- single event end -->
                            </div>
                        </div>
                        <!--<div class="content-button btn-section">
                  <a href="" class="color-two btn-custom smooth-scroll">View All Events <i class="fas fa-arrow-right"></i>
                  </a>
               </div>-->
                        <!-- .row end -->
                    </div>
                </div>
        </section>
        <!-- events area end -->
        <!--contact-->
        <section id="con">
            <div id="contact" class="wrap-bg pt-0" style="background-image: url({{asset('comimages/help.webp')}});">
                <div class="container-fluid">
                    <div style="background-color:#1abc9c;" class="row justify-content-center text-center text-white">
                        <div class="col-lg-8">
                            <div class="section-title with-p mb-0 p-4">
                                <h2 class="mb-0">We’re Here To Help You</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row container m-auto pt-5">
                        <div class="col-md-6 col-lg-6">
                            <form class="themeioan-form-contact form" method="get" action="{{route('query')}}">
                            @csrf
                            <!-- Change Placeholder and Title -->
                                <div>
                                    <input class="input-text required-field" type="text" name="name"
                                           id="contactName"
                                           placeholder="Name" title="Your Full Name"/>
                                </div>
                                <div>
                                    <input class="input-text required-field email-field" type="email"
                                           name="email"
                                           id="contactEmail" placeholder="Email" title="Your Email"/>
                                </div>
                                <div>
                                    <input class="input-text required-field" type="text" name="phone"
                                           id="contactSubject" placeholder="Phone number"/>
                                </div>
                                <div>
                                <textarea class="input-text required-field" name="message" id="contactMessage"
                                          placeholder="Message" title="Your Message"></textarea>
                                </div>
                                <form action="submit">
                                                            <button type="submit" style="width:250px;">
                                                            <span>Send Message</span>
                                                            <div class="liquid"></div>
                                                            </button>
                                                        </form>
                                <!--<button class="btn color-two button text-white" type="submit">Send Message</button>-->
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-6 mt-3">
                            <img src="{{asset('comimages/counsellor.webp')}}" alt="Buy this Course">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--Feedback form-->
          <section id="con">
            <div id="contact" class="wrap-bg pt-0" style="background-image: url({{asset('comimages/feed.webp')}});">
                <div class="container-fluid">
                    <div style="background-color:#1abc9c;" class="row justify-content-center text-center text-white">
                        <div class="col-lg-8">
                            <div class="section-title with-p mb-0 p-4">
                                <h2 class="mb-0">FEEDBACK</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row container m-auto pt-5">
                        <div class="col-md-6 col-lg-6">
                            <form class="themeioan-form-contact form" method="post" action="{{route('user.feedback.store')}}">
                            @csrf
                            <!-- Change Placeholder and Title -->
                                <div>
                                    <input class="input-text required-field" type="text" name="name"
                                           placeholder="Name" title="Your Full Name"/>
                                </div>

                                <div>
                                    <input class="input-text required-field email-field" type="email"
                                           name="email" placeholder="Email" title="Your Email"/>
                                </div>

                                <div>
                                    <input class="input-text required-field" type="text" name="phone"
                                         placeholder="Phone number"/>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-3 text-white">
                                            <input type="radio"  name="rating" value="Very good">
                                            <label for="Very good">Very good</label><br>
                                        </div>
                                        <div class="col-sm-2 text-white">
                                            <input type="radio"  name="rating" value="Good">
                                            <label for="Good">Good</label><br>
                                        </div>
                                        <div class="col-sm-2 text-white">
                                            <input type="radio"  name="rating" value="Average">
                                            <label for="Average">Average</label>
                                        </div>
                                        <div class="col-sm-2 text-white">
                                            <input type="radio" name="rating" value="poor">
                                            <label for="poor">poor</label>
                                        </div>
                                        <div class="col-sm-3 text-white">
                                            <input type="radio"  name="rating" value="Very poor">
                                            <label for="Very poor">Very poor</label>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                <textarea class="input-text required-field" name="feedback"
                                          placeholder="Feedback" title="Your Feedback"></textarea>
                                </div>
                                <form action="submit">
                                                            <button type="submit" style="width:250px;">
                                                            <span>SUBMIT</span>
                                                            <div class="liquid"></div>
                                                            </button>
                                                        </form>

                                <!--<button class="btn color-two button text-white" type="submit">SUBMIT</button>-->
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-6 mt-3">
                            <img src="{{asset('comimages/fed.jpg')}}" alt="Buy this Course">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- newsletter area start -->
        <div id="newsletter">
            <div class="container">
                <div class="footer-subscribe">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h5 class="subscribe-text">Subscribe for latest updates and Discounts</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="subscribe-form-pt">
                                <!-- Begin Newsletter Signup Form -->
                                <form class="themeioan-form-newsletter form" action="#">
                                    <div class="newslleter-call">
                                        <input class="input-text required-field" type="text" placeholder="Your email"
                                               title="Your email"/>
                                        <input class="newsletter-submit color-two button" type="submit"
                                               value="Subscribe"/>
                                    </div>
                                </form>
                                <!--End Newsletter-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter area end -->
    </main>
     <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Welcome To ACS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <iframe id="ytplayer" width="727" height="409" src="https://www.youtube.com/embed/sPn1bv_tHho"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
 
            $('#exampleModalCenter').on('hide.bs.modal', () => {
                let video = $("#ytplayer").attr("src");
                $("#ytplayer").attr("src","");
                $("#ytplayer").attr("src",video);
            })
        $('.carousel').carousel({
            interval: 3000
        })
            

        // Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 5000,
    delay: (el, i) => 90*i
  }).add({
    targets: '.ml2',
    opacity: 1,
    duration: 1,
    easing: "easeOutExpo",
    delay: 1
  });
   
  AOS.init();
</script>
<script>
// Set the date we're counting down to
var countDownDate = new Date("June 5, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
@endsection



