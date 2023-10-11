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
    
    <!-- home 12  -->

    <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('css/hcss/images/fav.png')}}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/hcss/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/hcss/font-awesome.min.css')}}">
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
        <link rel="stylesheet" type="text/css" href="{{asset('css/hcss/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/hcss/responsive.css')}}">
    
    
@endsection
@section('styles')
    <style>
        {{--for the large screen--}}
      @media only screen and (max-width: 1920px) {
            .bg-home-ome1 {
                background: url({{asset('comimages/back-12.png')}}) no-repeat center;
                background-size: cover;
            }
            .bg-banner {
                background: url({{asset('comimages/home12/banner.jpg')}});
                background-repeat: no-repeat center;
                background-size: cover;
                min-height: 780px;
            }
        }

        @media only screen and (max-width: 1044px) {
            .bg-home-ome1 {
                background: url({{asset('comimages/back-12.png')}}) no-repeat;
            }
        }
        
        .count {
            text-align: left;
            margin-top: 0px;
            color:red;

        }
            @media screen and (max-width: 426px) {
            .bg-home-ome1 {
                background: url({{asset('comimages/back-mobile.png')}}) no-repeat ;
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
 background: #92089e;
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
            bottom:100px;
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
 background: #92089e;
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

.stu-review{
            display: flex;
        }
        .stu-cont{
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .table td {
text-align: center;
} 

.rounded-circle {
    border-radius: 50% !important;
}
img {
    max-width: 100%;
    height: auto;
    vertical-align: top;
}

.sub-info{
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    color: #004975;
}

.display-30 {
    font-size: 0.9rem;
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
            <a href="https://wa.me/919085268769" target="_blank"><img src="{{asset('comimages/whatsapp.png')}}" width="80px" class="whatsapp_float_btn"/></a>
        </div>
         <!--header content area start  position-center-->
        <div class="main-content">
            <!-- Banner Section Start -->
            <div id="rs-banner" class="rs-banner style10 bg-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 pl-60 order-last pt-5">
                            <div class="img-part">
                               <img class="up-down-new" style="height:55%;" src="{{asset('comimages/home12/3.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-0 pt-5">
                            <div class="banner-content mb-5">
                            <!--<div><h3 class="text-white mobile-center text-dark">Countdown begins for IAS 2022 PRELIMS</h3>-->
                            <!--<h2 id="demo" class="count mobile-center" style="color:#e08207; font-size: 48px;"></h2></div>-->
                               <div class="mt-5 sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Welcome to</div>
                                <h2 class="wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms" style="font-size: 48px;">Academy of Civil Services
                                </h2>
                                <div class=" sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Be the Best - Be the Change</div>
                                <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="2000ms">
                                    @auth()
                            @if(!$user->subjectChoose($user->id))
                                                  <center><a href="{{route('user.show', $user->id)}}" style="box-shadow: 5px 10px #888888;" class="readon green-banner mt-4">Demo Course</a></center>
                            @endif
                            @else
                            <center><a href="{{route('login')}}" style="box-shadow: 5px 10px #888888;" class="readon green-banner mt-4">Demo Course</a></center>
                            @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-intro-box">
                    <div class="shape-img">
                        <img class="up-down-new" src="{{asset('comimages/home12/dotted-shape.png')}}" alt="">
                    </div>
                    <div class="intro-img mt-5">
                        <img class="spine2" src="{{asset('comimages/home12/intro-box.png')}}" alt="">
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->
        </div>
        </div>
        

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
                            <h4 data-aos="fade-down" class="text-center text-white p-2" style="border: 1px solid #051263; background-color: #0c8b51; border-radius:30px;"><strong>VISION</strong></h4>
                            <h4 data-aos="fade-left">Aspirations of Academy of Civil Services move hand in hand with the Indian Civil Services Aspirants.
                            Success of each aspirant is our priority. We believe in pure ethical form of service, with zero tolerance in quality
                            learning at an affordable price for each fellow Indian.</h4><br>
                            <h4 data-aos="fade-down" class="text-center text-white p-2" style="border: 1px solid #051263; background-color: #0c8b51; border-radius:30px;"><strong>MISSION</strong></h4>
                            <h4 data-aos="fade-left">Our each session starts with a mission to promote smart work, patience and perseverance among the students.
                             We pledge to give guidance to our aspirants till they land in success</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <!-- features area start -->
        <div class="justify-content-center container pb-3" data-aos="fade-right">
            <!--<a href="https://drive.google.com/file/d/1ENBUdfrN-O7bxFQLwKz3ytfqQJu-VcL7/view?usp=sharing" class=" btn color-two button text-white">READ OUR ACS WISDOM</a>-->
            <form action="https://drive.google.com/file/d/1r2YteXc6JC8gEymFN_EjPR6NR-CciqIj/view?usp=sharing">
                <button type="submit" style="width:250px;">
                    <span>ACS WISDOM</span>
                    <div class="liquid"></div>
                </button>
            </form>
        </div>

        
        <!--<div id="features" class="wrap-bg container-fluid">-->
        <div id="features" class="wrap-bg container-fluid pt-0 pb-3 " >
            <!-- .container -->
            <div class="container-fluid p-0">
                <div class="text-center container-fluid p-2 mb-2 post-heading-center mb-60" style="background-color: #0c8b51;">
                    <h2 data-aos="fade-right" class="text-white ml2">Knowledge Center for IAS</h2></div>
                <!-- .row -->
                </div>
            <div class="row mb-3">
                <div class="col-lg-8 col-sm-12 col-xs-12">
                    <div class="row container">
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div  class="single-features-light text-center shadow rounded" style="background-color: #92089e;">
                            <!-- single features -->
                            <div class="move" >
                                <!-- uses solid style -->
                                <img class="text-danger p-1" style="width:90px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/book.gif')}}">
                                <a href="/acsall"><h4 class="font-weight-bold" style="color:#fff;" >ACS DIGIPEDIA</h4></a>
                                <p class="text-white">Download Free IAS Resources.</p>
                                <div class="feature_link">
                                    <a href="/acsall" class="text-white">Click here <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="single-features-light text-center shadow rounded" style="background-color: #92089e;">
                            <!-- single features -->
                            <div class="move">
                                <img class="text-danger p-1" style="width:90px; boder: 1px solid black; border-radius: 20px; " src="{{asset('comimages/computer.gif')}}">
                                <a href="{{route('dailynewsanalyse.index')}}"><h4 class=" font-weight-bold" style="color:#fff;">
                                      Daily News Analysis</h4></a>
                                <p class="text-white">Stay Updated.</p>
                                <div class="feature_link">
                                    <a href="{{route('dailynewsanalyse.index')}} " class="text-white">Click here <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6 mt-2 col-sm-12 col-xs-12">
                            <div class="single-features-light text-center shadow rounded" style="background-color: #92089e;">
                            <!-- single features -->
                            <div class="move">
                                <img class="secondary-color p-1" style="width:90px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/gears.gif')}}">
                                <a href="/currentaffairs"><h4 class="font-weight-bold" style="color:#fff;">CURRENT AFFAIRS</h4></a>
                                <p class="text-white">Know how to crack the civil services exam.</p>
                                <div class="feature_link">
                                    <a href="/currentaffairs" class="text-white">Click here <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6 mt-2 col-sm-12 col-xs-12">
                            <div class="single-features-light text-center shadow rounded" style="background-color: #92089e; box-shadow: 10px 10px 5px grey;">
                            <!-- single features -->
                            <div class="move">
                                <img class="secondary-color p-1" style="width:90px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/home.gif')}}">
                                <a href="https://drive.google.com/file/d/1-xhZKrZS17PcvQMWukDs1ln7fdD0pIco/view?usp=sharing"><h4 class="font-weight-bold text-uppercase" style="color:#fff;">upsc exam calendar</h4></a>
                                <p class="text-white">Upsc exam details.</p>
                                <div class="feature_link">
                                    <a href="https://drive.google.com/file/d/1-xhZKrZS17PcvQMWukDs1ln7fdD0pIco/view?usp=sharing" class="text-white">Click here <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-sm-12 col-xs-12">
                    <img style="width: 500px; height: 470px" src="{{ asset('comimages/know-1.png')}}">
                </div>
        </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        <!-- features area end -->
        
        <section>
                <div class="post-heading-center section-title mb-60 container-fluid p-2" style="background-color: #0c8b51;">
                    <h2 data-aos="fade-right" class="text-white ml2">WHY CHOOSE US </h2></div>
                <div class="container">
    
    <div class="row align-items-center mb-5">
        <div class="col-sm-6 col-lg-4 mb-2-9 mb-sm-0">
            <div class="pr-md-3">
                <div class="text-center text-sm-right mb-2-9">
                    <div class="mb-4">
                        <img class="secondary-color" style="width:90px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/people.gif')}}">
                    </div>
                    <h4 class="sub-info">Qualified Teachers</h4>
                    <p class="display-30 mb-0">We provide teachers with experience and in-depth knowledge about civil services.</p>
                </div>
                <div class="text-center text-sm-right">
                    <div class="mb-4">
                        <img class="secondary-color" style="width:90px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/phone.gif')}}">
                    </div>
                    <h4 class="sub-info">24 x 7 support</h4>
                    <p class="display-30 mb-0">We provide support & guidance anytime you want.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
            <div class="why-choose-center-image">
                <img src="{{asset('comimages/choose.png')}}" alt="..." class="rounded-circle">
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="pl-md-3">
                <div class="text-center text-sm-left mb-2-9">
                    <div class="mb-4">
                        <img class="secondary-color" style="width:90px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/book.gif')}}">
                    </div>
                    <h4 class="sub-info">Online & Offline Classes</h4>
                    <p class="display-30 mb-0">We provide online & Offline classes at a minimal cost and at your own convenience.</p>
                </div>

                <div class="text-center text-sm-left">
                    <div class="mb-4">
                        <img class="secondary-color" style="width:90px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/video.gif')}}">
                    </div>
                    <h4 class="sub-info">High Quality Materials</h4>
                    <p class="display-30 mb-0">We provide high content materials prepared by our own faculities.</p>
                </div>
            </div>
        </div>
    </div>
</div>
            </section>
            
        <!-- courses area start -->
            
       <section id="ourcourses">
    <div  id="courses" class="wrap-bg wrap-bg-dark pt-0 pb-0" style="background-image: url({{asset('comimages/book.jpg')}})">
    <div class="container-fluid">
    <div style="background-color:#0c8b51;" class="row justify-content-center text-center p-2 ">
        <div class="col-lg-8">
            <div class="section-title with-p text-white mb-0 p-3">
                <h2 data-aos="fade-left" class="mb-0">Popular Courses</h2>
                <h4 data-aos="fade-right" class="text-white">Your civil services dream is a click away!</h4>
            </div>
        </div>
    </div>
    <!-- .row -->
    <div class="row justify-content-center p-2 mt-2  " style="padding-bottom:0">

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
</section>

        <!-- courses area end -->
        <!-- teachers area start -->
        <!-- teachers area start -->
        <section id="ourteam">
            <div id="teachers" class="wrap-bg wrap-bg-dark pt-0 bg-light">
                <div class="container-fluid">
                    <div class="row justify-content-center text-center" style="background-color: #0c8b51;">
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
                                <img src="{{asset('comimages/shramana1.webp')}}" alt="Image 3"/></a>
                                <h5>Shramana Sarma Roy</h5>
                                <span>Content & Class Management</span>
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
                                <img src="{{asset('comimages/nisha_col.jpeg')}}" alt="Image 3"/></a>
                                <h5>Nisha Sonar</h5>
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

        </section>
        <!-- teachers area end -->
        <!-- teachers area end -->
        <section id="review">
            <div>
                    <div class="text-center p-4" style="background-color: #0c8b51;">
                         <h2 class="text-white"> STUDENTS  <spam class="pl-3 pr-3" style="background-color: #d99032;">GOOGLE</spam>  REVIEWS</h2>
                    </div>
                </div>
            <div class="container mt-3 mb-3">
<!--        <div>-->
<!--            <script src="https://apps.elfsight.com/p/platform.js" defer></script>-->
<!--<div class="elfsight-app-1a2360f1-6f9c-4c01-b47e-eff1387bce5e"></div>-->
<!--        </div>-->
        </div>
        </section>
        <!-- testimonials area end -->
        <!-- counter area start -->
        <section id="progress">
            <div id="counter" class="wrap-bg wrap-bg-grey" style="background-color: #0c8b51;">
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
                                            <img class="secondary-color p-1" style="width:90px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/people.gif')}}">
                                            <h4 style="color:#fff;">2552</h4>
                                            <p class="text-white">Students</p>
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
                                            <img class="secondary-color p-1" style="width:90px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/course.gif')}}">
                                            <h4 style="color:#fff;">21</h4>
                                            <p class="text-white">Courses</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="info">
                                        <!-- 3 -->
                                        <div class="themeioan_counter text-center">
                                            <!-- single counter item -->
                                            <img class="secondary-color p-1" style="width:90px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/people.gif')}}">
                                            <h4 style="color:#fff;">5</h4>
                                            <p class="text-white">Certified Teachers</p>
                                        </div>
                                        <!-- end single counter item -->
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="info">
                                        <!-- 4 -->
                                        <div class="themeioan_counter text-center">
                                            <!-- single counter item -->
                                            <img class="secondary-color p-1" style="width:90px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/trophy.gif')}}">
                                            <h4 style="color:#fff;">4</h4>
                                            <p class="text-white">Award Winning</p>
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

            <div class="container mt-4 mb-4" >
    <div class="row">
        <div class="col-lg-6">
            <div class="event-photo themeioan_event">
                                        <div class="date" style="background-color: #92089e;">
                                            <h4><span>7</span> August, 2022</h4>
                                        </div>
                                        <!--<img src="{{asset('comimages/eventias.webp')}}" alt="">-->
                                        <img src="{{asset('comimages/apsc_event.webp')}}" alt="">
                                    </div>
        </div>
        <div class="col-lg-6">
            <div class="d-flex flex-column">
                <h2 class="text-center text-white" style="background-color: #0c8b51; border-radius: 30px;">UPCOMING EVENTS</h2>
                <h3 class="text-center mt-4">IAS WEBINAR</h3>
                <table class="table bg-light mt-3 justify-content-center">
  
  <tbody>
    <tr>
      
      <td>Date</td>
      <td>&nbsp;</td>
      <td>7 August, 2022</td>
    </tr>
    <tr>
      
      <td>Time</td>
      <td>&nbsp;</td>
      <td>7.30 pm - 8.30 pm</td>
    </tr>
    <tr>
      
      <td>Mode</td>
      <td>&nbsp;</td>
      <td>Online</td>
    </tr>
  </tbody>
</table>

<div class="btn-section">
    <form action="{{route('webinar-registration.create',84800065282)}}">
                                                            <button type="submit" style="width:250px;">
                                                            <span>Book Now</span>
                                                            <div class="liquid"></div>
                                                            </button>
                                                        </form>
                                        </div>
            </div>
        </div>
    </div>

</div>
        <!-- events area end -->
        <!--contact-->
        <section>
    <div style="background-color: #92089e">
        <div class="row justify-content-center text-center text-white" style="background-color: #0c8b51;">
                        <div class="col-lg-8">
                            <div class="section-title with-p mb-0 p-4">
                                <h2 class="mb-0">VISIT OUR INSTITUTE</h2>
                            </div>
                        </div>
                    </div>
        <div>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.4851596283424!2d94.91970161425219!3d27.48528324182426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37409869cb35768d%3A0x491ce8fdcae8360a!2sAcademy%20Of%20Civil%20Services!5e0!3m2!1sen!2sin!4v1641360136814!5m2!1sen!2sin" width="2100" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
        </div>
        <div class="m-0">
        <div class="row" >
            <div class="col-lg-3 col-sm-12">
                    <div class="d-flex flex-row">
                <img class="secondary-color" style="width:70px; boder: 1px solid black; border-radius: 30%; padding-top: 10px;" src="{{asset('comimages/phone.gif')}}">
                <h3 style="padding-top: 25px; padding-left: 40px; color: #fff;">9085268769</h3>
            </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="d-flex flex-row">
                <img class="secondary-color" style="width:70px; boder: 1px solid black; border-radius: 30%; padding-top: 10px;" src="{{asset('comimages/gmail.gif')}}">
                <h4 style="padding-top: 25px; padding-left: 40px; color: #fff;">acsindia.ias@gmail.com</h4>
            </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="d-flex flex-row">
                <div class="d-flex flex-column">
                <h4 style="padding-top: 15px; padding-left: 40px; color: #fff;">NALIAPOOL,DIBRUGARH</h4>
                <h4 style=" padding-left: 40px; color: #fff;">District: Dibrugarh</h4>
                <h4 style=" padding-left: 40px; color: #fff;">PIN Code: 786001</h4>
                <h4 style=" padding-left: 40px; color: #fff;">State: Assam</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="d-flex flex-row">
                <div class="d-flex flex-column">
                <h4 style="padding-top: 15px; padding-left: 40px; color: #fff;">3rd floor, Chitrabon Enclave, R G BARUAH ROAD,</h4>
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
        
        <!--contact-->
        <section id="con">
            <div id="contact" class="wrap-bg pt-0" style="background-image: url({{asset('comimages/help.webp')}});">
                <div class="container-fluid">
                    <div class="row justify-content-center text-center text-white" style="background-color: #0c8b51;">
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
                                    <input class="input-text required-field" style="border-radius: 35px;" type="text" name="name"
                                           id="contactName"
                                           placeholder="Name" title="Your Full Name"/>
                                </div>
                                <div>
                                    <input class="input-text required-field email-field" style="border-radius: 35px;" type="email"
                                           name="email"
                                           id="contactEmail" placeholder="Email" title="Your Email"/>
                                </div>
                                <div>
                                    <input class="input-text required-field" type="text" style="border-radius: 35px;" name="phone"
                                           id="contactSubject" placeholder="Phone number"/>
                                </div>
                                <div>
                                <textarea class="input-text required-field" name="message" style="border-radius: 35px;" id="contactMessage"
                                          placeholder="Message" title="Your Message"></textarea>
                                </div>
                                <form action="submit">
                                                            <button type="submit" style="width:250px;">
                                                            <span>Send Message</span>
                                                            <div class="liquid"></div>
                                                            </button>
                                                        </form>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-6 mt-3">
                            <img src="{{asset('comimages/counsellor.webp')}}" style="border-radius: 35px;" alt="Buy this Course">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--Feedback form-->
          <section id="con" style="background-image: url({{asset('comimages/feed.webp')}});">
            <div id="contact" class="wrap-bg pt-0">
                <div class="container-fluid">
                    <div class="row justify-content-center text-center text-white" style="background-color: #0c8b51;">
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
                                    <input class="input-text required-field" style="border-radius: 35px;" type="text" name="name"
                                           placeholder="Name" title="Your Full Name"/>
                                </div>

                                <div>
                                    <input class="input-text required-field email-field"  style="border-radius: 35px;" type="email"
                                           name="email" placeholder="Email" title="Your Email"/>
                                </div>

                                <div>
                                    <input class="input-text required-field" style="border-radius: 35px;" type="text" name="phone"
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
                                <textarea class="input-text required-field" style="border-radius: 35px;" name="feedback"
                                          placeholder="Feedback" title="Your Feedback"></textarea>
                                </div>

                                <form action="submit">
                                                            <button type="submit" style="width:250px;">
                                                            <span>SUBMIT</span>
                                                            <div class="liquid"></div>
                                                            </button>
                                                        </form>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-6 mt-3">
                            <img src="{{asset('comimages/fed.jpg')}}" style="border-radius: 35px;" alt="Buy this Course">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
    </main>
     <!-- Modal -->
    
@endsection
@section('footer')
    @include('partials.footer')
@endsection
@section('scripts')
        <script src="{{asset('js/hjs/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{asset('js/hjs/jquery.min.js')}}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{asset('js/hjs/bootstrap.min.js')}}"></script>
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
    <script src="{{asset('https://unpkg.com/aos@2.3.1/dist/aos.js')}}"></script>
    <script src='{{asset("https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js")}}'></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-235408727-1">
    </script>
    <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-235408727-1');
    </script>
    <script>
 
            $('#exampleModalCenter').on('hide.bs.modal', () => {
                let video = $("#ytplayer").attr("src");
                $("#ytplayer").attr("src","");
                $("#ytplayer").attr("src",video);
            })
        $('.carousel').carousel({
            interval: 3000
        })
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
<script type="text/javascript">
wpac_init = window.wpac_init || [];
wpac_init.push({widget: 'GoogleReview', id: 33427, place_id: 'ChIJjXY1y2mYQDcRCjboyv3oHEk', view_mode: 'list'});
(function() {
    if ('WIDGETPACK_LOADED' in window) return;
    WIDGETPACK_LOADED = true;
    var mc = document.createElement('script');
    mc.type = 'text/javascript';
    mc.async = true;
    mc.src = '{{asset("https://cdn.widgetpack.com/widget.js")}}';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
})();
</script>
<div id="wpac-google-review"></div>
<script type="text/javascript">
wpac_init = window.wpac_init || [];
wpac_init.push({widget: 'GoogleReview', id: 33427, place_id: 'ChIJjXY1y2mYQDcRCjboyv3oHEk', view_mode: 'badge'});
(function() {
    if ('WIDGETPACK_LOADED' in window) return;
    WIDGETPACK_LOADED = true;
    var mc = document.createElement('script');
    mc.type = 'text/javascript';
    mc.async = true;
    mc.src = '{{asset("https://cdn.widgetpack.com/widget.js")}}';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
})();
</script>
@endsection