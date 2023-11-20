@extends('layouts.main')
@section('title')
Academy of Civil Services | Best IAS Coaching in India
@endsection
@section('links')
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Main Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<!-- Slick  -->
<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<!-- Font Awesome  -->
<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="{{asset('js/sweetalert2.min.js')}}"></script>
<!-- jQuery Fancybox  -->
{{--    
<link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
--}}
<!-- Magnific Popup core CSS file -->

<!--- font style for brand -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8391119276578244"
    crossorigin="anonymous"></script>


{{--    
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
--}}
<!-- home 12  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<!-- owl.carousel css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/owl.carousel.css') }}">
<!-- slick css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/slick.css') }}">
<!-- off canvas css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/off-canvas.css') }}">
<!-- linea-font css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/linea-fonts.css') }}">
<!-- magnific popup css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/magnific-popup.css') }}">
<!-- Main Menu css -->
<link rel="stylesheet" href="{{ asset('css/hcss/rsmenu-main.css') }}">
<!-- spacing css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/rs-spacing.css') }}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/style.css') }}">
<!-- This stylesheet dynamically changed from style.less -->
<!-- responsive css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/responsive.css') }}">
<link rel="stylesheet" href="{{asset('css/ucss/open-iconic-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/aos.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/icomoon.css')}}">
<link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap')}}"
    rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/ucss/open-iconic-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/aos.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/icomoon.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/chosen.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/jquery.scrollbar.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/lightbox.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/magnific-popup.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/slick.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/megamenu.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/dreaming-attribute.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/style.css') }}" />
@endsection
@section('styles')
<style>
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

.fa-mob {
    color: #e52e06;
}

.fa-phone {
    color: white;
    font-size: 32px;
    padding-left: 20px;
    padding-top: 35px;
}

.fa-envelope {
    color: white;
    font-size: 32px;
    padding-left: 20px;
    padding-top: 35px;
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

.dropdown-content a:hover {
    background-color: #bbb;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #bf710a;
}

@media only screen and (max-width: 1920px) {
    .custom-slider {
        height: 70%;
    }
}

@media only screen and (max-width: 1044px) {
    .custom-slider {
        height: 70%;
    }
}

@media screen and (max-width: 426px) {
    .custom-slider {
        height: 300px;
    }
}

.whatsapp_float {
    position: fixed;
    bottom: 100px;
    right: 20px;
    z-index: 1000;
}

.stu-review {
    display: flex;
}

.stu-cont {
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

.sub-info {
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    color: #004975;
}

.display-30 {
    font-size: 0.9rem;
}

.fa-check-circle {
    color: red;
    margin-top: 10px;
}

.fa-text {
    color: black;
    font-size: 20px;
    padding: 20px;
    margin-top: 10px;
}

.shadow_1 {
    box-shadow: 5px 10px #888888;
}

.shadow_2 {
    box-shadow: 5px 5px #888888;
}

.rs-faq-part.style1 .img-part {
    background: url("{{asset('comimages/apsc/center.png')}}");
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100%;
    min-height: 615px;
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
<main>
    <!--<div class="whatsapp_float">-->
    <!--   <a href="https://wa.me/919085268769" target="_blank"><img src="{{asset('comimages/whatsapp.png')}}" width="80px" class="whatsapp_float_btn"/></a>-->
    <!--</div>-->

    @section('new_navbar')
    @include('partials.new_navbar')
    @endsection
    <div class="header-mobile">
        <!-- <div class="header-mobile-left">
            
        </div> -->
        <div class="header-mobile-mid">
            <div class="header-logo">
                <a href="index.html"><img alt="Kobolg" src="{{asset('img/mob.jpg')}}" class="logo pl-3"></a>
            </div>
        </div>
        <div class="header-mobile-right pr-4">
            <div class="block-menu-bar">
                <a class="menu-bar menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide mt-3 mb-1" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active custom-slider">
                <a href="">
                    <img class="d-block w-100 h-100" src="{{asset('comimages/2023/head/1.png')}}" alt="First slide">
                </a>
            </div>
            <div class="carousel-item custom-slider">
                <a href="">
                    <img class="d-block w-100 h-100" src="{{asset('comimages/2023/u11.webp')}}" alt="First slide">
                </a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only" style="color:red;">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style1 pb-10 pb-10 pb-3" style="margin-top:10px; !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-last">
                    <div class="notice-bord style1">
                        <h4 class="title" style="background-color: #e52e06; font-family: 'Righteous'; !important">
                            Notifications</h4>
                        <ul>
                            <!-- <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="date"><span>10</span>JULY</div>
                                <div class="desc"><a href="https://acsindiaias.com/course/ias-booster-course-g">IAS
                                        BOOSTER COURSE (K) launched (12 MONTHS).</a></div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="date"><span>31</span>JULY</div>
                                <div class="desc"><a href="https://acsindiaias.com/course/ias-booster-course-g">IAS
                                        BOOSTER COURSE (L) launched (12 MONTHS).</a></div>
                            </li> -->
                            <!--<li class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">-->
                            <!--   <div class="date"><span>10</span>April</div>-->
                            <!--   <div class="desc"><a href="https://acsindiaias.com/user/study/show/28">UPSC PRELIMS BOOSTER TEST SERIES</a></div>-->
                            <!--</li>-->
                            <!--<li class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">-->
                            <!--   <div class="date"><span>25</span>Dec</div>-->
                            <!--   <div class="desc"><a href="https://acsindiaias.com/recorded/course/ias-study-materials">IAS STUDY MATERIALS</a></div>-->
                            <!--</li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 pr-50 pr-15">
                    <div class="about-part">
                        <div class="sec-title mb-10">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:110px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/d5.png')}}">
                                    <!--<a href="https://acsindiaias.com/course">-->

                                    <!--   <h4 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2 shadow_1" >Online Courses</h4>-->
                                    <!--   </i>-->
                                    <!--</a>-->
                                    <a href="{{asset('/course')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">Online Courses</a>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:110px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/d5.png')}}">
                                    <!--<a href="https://acsindiaias.com/offline">-->
                                    <!--   <h4 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2" >Offline Courses</h4>-->
                                    <!--   </i>-->
                                    <!--</a>-->
                                    <a href="{{asset('/offline')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">Offline Courses</a>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:110px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/d1.png')}}">
                                    <!--<a href="https://acsindiaias.com/upsc_recorded_course">-->
                                    <!--   <h4 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2" >Reorded Courses</h4>-->
                                    <!--   </i>-->
                                    <!--</a>-->
                                    <a href="{{asset('upsc_recorded_course')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">Reorded Courses</a>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:110px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/d2.png')}}">
                                    <!--<a href="{{route('dailynewsanalyse.index')}}">-->
                                    <!--   <h4 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2" >Daily News</h4>-->
                                    <!--   </i>-->
                                    <!--</a>-->
                                    <a href="{{route('dailynewsanalyse.index')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">Daily News</a>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:110px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/d4.png')}}">
                                    <!--<a href="{{route('current.affair.index', 'current_affair')}}">-->
                                    <!--   <h4 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2" >Current Affairs</h4>-->
                                    <!--   </i>-->
                                    <!--</a>-->
                                    <a href="{{asset('/current_affairs_2023')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">Current Affairs</a>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:130px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/cr.png')}}">
                                    <!--<a href="https://acsindiaias.com/acsall">-->
                                    <!--   <h4 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2" >ACS Degipedia</h4>-->
                                    <!--   </i>-->
                                    <!--</a>-->
                                    <a href="{{asset('/acsall')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">ACS Degipedia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->
    <div>
        <section class="gray-bg2">
            <div class="container pb-4">
                <div class="row justify-content-center pb-3 pt-2 pb-2">
                    <div class="col-md-8 text-center heading-section">
                        <h2 class="mb-4 text-uppercase pt-5" style="font-family: 'Righteous';">Upcoming Events</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 bg-light p-3">
                        <div class="row ">
                            <div class="col-lg-4">
                                <img src="{{ asset('comimages/2023/e-1.webp') }}" alt="images">
                            </div>
                            <div class="col-lg-7">
                                <div class="course-info">
                                    <h3 class="course-title">
                                        <a href="/acs_seminar">
                                            <h3 class="font-weight-bold" style="font-family: 'Righteous';">APSC/UPSC
                                                FREE SEMINAR</h3>
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
                                            <a href="/acs_seminar" class="btn text-white font-weight-bold mb-4"
                                                style="background-color: #e52e06;">Apply Now<i
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
                                <img src="{{ asset('comimages/2023/e-2.webp') }}" alt="images">
                            </div>
                            <div class="col-lg-7">
                                <div class="course-info">
                                    <h3 class="course-title">
                                        <a href="/acs_seminar">
                                            <h3 class="font-weight-bold" style="font-family: 'Righteous';">APSC/UPSC
                                                FREE WEBINAR</h3>
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
                                            <a href="/acs_seminar" class="btn text-white font-weight-bold mb-4"
                                                style="background-color: #e52e06;">Apply Now<i
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
        <!-- End APSC Section -->

        <!--contact-->
        <!--<div>-->
        <!-- Why Choose Us Section Start -->
        <!--           <div class="why-choose-us gray-bg pb-120 md-pt-70 md-pb-80 pt-4">-->
        <!--               <div class="container-fluid ml-5 mr-5">-->
        <!--                   <div class="row align-items-center">-->
        <!--                       <div class="col-lg-5 lg-pr-0 md-mb-50">-->
        <!--                           <div class="choose-us-part">-->
        <!--                               <div class="sec-title wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">-->
        <!--                                   <h2 class="title mb-20">Why Choose Us</h2>-->
        <!--                               </div>-->
        <!--                               <div class="facilities-part mt-5">-->
        <!--                                   <div class="single-facility wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">-->
        <!--                                   <div class="icon-part one">-->
        <!--                                           <img class="shape-img" style="width:50px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/icons/d1.png')}}" alt="Shape Image">-->
        <!--                                       </div>-->
        <!--                                       <div class="text-part">-->
        <!--                                           <h2 >Qualified Teachers</h2>-->
        <!--                                           <p class="desc">We provide teachers with experience and in-depth knowledge about civil services.</p>-->
        <!--                                       </div>-->
        <!--                                   </div>-->
        <!--                                   <div class="single-facility wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">-->
        <!--                                   <div class="icon-part one">-->
        <!--                                           <img class="shape-img" style="width:50px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/icons/d4.png')}}" alt="Shape Image">-->
        <!--                                       </div>-->
        <!--                                       <div class="text-part">-->
        <!--                                           <h2 >Online & Offline Classes</h2>-->
        <!--                                           <p class="desc">We provide online & Offline classes at a minimal cost and at your own convenience.</p>-->
        <!--                                       </div>-->
        <!--                                   </div>-->
        <!--                                   <div class="single-facility wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">-->
        <!--                                   <div class="icon-part one">-->
        <!--                                           <img class="shape-img" style="width:50px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/icons/cr.png')}}" alt="Shape Image">-->
        <!--                                       </div>-->
        <!--                                       <div class="text-part">-->
        <!--                                           <h2 >High Quality Materials</h2>-->
        <!--                                           <p class="desc">We provide high content materials prepared by our own faculities.</p>-->
        <!--                                       </div>-->
        <!--                                   </div>-->
        <!--                               </div>-->
        <!--                           </div>-->
        <!--                       </div>-->
        <!--                       <div class="col-lg-6 offset-lg-1 lg-pl-0">-->
        <!--                           <div class="free-course-contact">-->
        <!--                               <div id="form-messages"></div>-->
        <!--                               <form class="themeioan-form-contact form" method="get" action="{{route('query')}}">-->
        <!--						@csrf-->
        <!-- Change Placeholder and Title -->
        <!--						<div>-->
        <!--							<input class="input-text required-field" style="border-radius: 35px;" type="text" name="name"-->
        <!--								id="contactName"-->
        <!--								placeholder="Name" title="Your Full Name"/>-->
        <!--						</div>-->
        <!--						<div>-->
        <!--							<input class="input-text required-field email-field" style="border-radius: 35px;" type="email"-->
        <!--								name="email"-->
        <!--								id="contactEmail" placeholder="Email" title="Your Email"/>-->
        <!--						</div>-->
        <!--						<div>-->
        <!--							<input class="input-text required-field" type="text" style="border-radius: 35px;" name="phone"-->
        <!--								id="contactSubject" placeholder="Phone number"/>-->
        <!--						</div>-->
        <!--						<div>-->
        <!--							<textarea class="input-text required-field" name="message" style="border-radius: 35px;" id="contactMessage"-->
        <!--								placeholder="Message" title="Your Message"></textarea>-->
        <!--						</div>-->
        <!--					<div class="form-btn submit-btn mt-30">-->
        <!--                                       <button type="submit" class="btn text-white" style="background-color: #F68C1F">SUBMIT QUERY</button>-->
        <!--                                   </div>-->
        <!--					</form>-->
        <!--                           </div>-->
        <!--                       </div>-->
        <!--                   </div>-->
        <!--               </div>-->
        <!--           </div>-->
        <!-- Why Choose Us Section End -->
        <!--</div>-->
        <!--Feedback form-->
        <!--<section id="con" style="background-image: url({{asset('comimages/feed.webp')}});">-->
        <!--	<div id="contact" class="wrap-bg pt-0">-->
        <!--		<div class="container-fluid">-->
        <!--			<div class="row justify-content-center text-center text-white" style="background-color: #134982" >-->
        <!--				<div class="col-lg-8">-->
        <!--					<div class="section-title with-p mb-0 p-4">-->
        <!--						<h2 class="mb-0">FEEDBACK</h2>-->
        <!--					</div>-->
        <!--				</div>-->
        <!--			</div>-->
        <!--			<div class="row container m-auto pt-5">-->
        <!--				<div class="col-md-6 col-lg-6">-->
        <!--					<form class="themeioan-form-contact form" method="post" action="{{route('user.feedback.store')}}">-->
        <!--						@csrf-->
        <!-- Change Placeholder and Title -->
        <!--						<div>-->
        <!--							<input class="input-text required-field" style="border-radius: 35px;" type="text" name="name"-->
        <!--								placeholder="Name" title="Your Full Name"/>-->
        <!--						</div>-->
        <!--						<div>-->
        <!--							<input class="input-text required-field email-field"  style="border-radius: 35px;" type="email"-->
        <!--								name="email" placeholder="Email" title="Your Email"/>-->
        <!--						</div>-->
        <!--						<div>-->
        <!--							<input class="input-text required-field" style="border-radius: 35px;" type="text" name="phone"-->
        <!--								placeholder="Phone number"/>-->
        <!--						</div>-->
        <!--						<div>-->
        <!--							<div class="row">-->
        <!--								<div class="col-sm-3 text-white">-->
        <!--									<input type="radio"  name="rating" value="Very good">-->
        <!--									<label for="Very good">Very good</label><br>-->
        <!--								</div>-->
        <!--								<div class="col-sm-2 text-white">-->
        <!--									<input type="radio"  name="rating" value="Good">-->
        <!--									<label for="Good">Good</label><br>-->
        <!--								</div>-->
        <!--								<div class="col-sm-2 text-white">-->
        <!--									<input type="radio"  name="rating" value="Average">-->
        <!--									<label for="Average">Average</label>-->
        <!--								</div>-->
        <!--								<div class="col-sm-2 text-white">-->
        <!--									<input type="radio" name="rating" value="poor">-->
        <!--									<label for="poor">poor</label>-->
        <!--								</div>-->
        <!--								<div class="col-sm-3 text-white">-->
        <!--									<input type="radio"  name="rating" value="Very poor">-->
        <!--									<label for="Very poor">Very poor</label>-->
        <!--								</div>-->
        <!--							</div>-->
        <!--						</div>-->
        <!--						<div>-->
        <!--							<textarea class="input-text required-field" style="border-radius: 35px;" name="feedback"-->
        <!--								placeholder="Feedback" title="Your Feedback"></textarea>-->
        <!--						</div>-->
        <!--					<form action="submit">-->
        <!--						<button type="submit" class="btn text-white" style="background-color: #F68C1F">SUBMIT</button>-->
        <!--					</form>-->
        <!--					</form>-->
        <!--				</div>-->
        <!--				<div class="col-md-6 col-lg-6 mt-3">-->
        <!--					<img src="{{asset('comimages/apsc/c-1.jpg')}}" style="border-radius: 35px;" alt="Buy this Course">-->
        <!--				</div>-->
        <!--			</div>-->
        <!--		</div>-->
        <!--	</div>-->
        <!--</section>-->
        <main>
            @section('mob_navbar')
            @include('partials.mob_navbar')
            @endsection
            <a href="#" class="backtotop active">
                <i class="fa fa-angle-up"></i>
            </a>
        </main>
</main>
<!-- Modal -->
@endsection
@section('footer')
@include('partials.footer')
@endsection
@section('scripts')
<script src="{{ asset('js/hjs/modernizr-2.8.3.min.js') }}"></script>
<!-- Google -->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<!-- jquery latest version -->
<script src="{{ asset('js/hjs/jquery.min.js') }}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{ asset('js/hjs/bootstrap.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<!-- Menu js -->
<script src="{{ asset('js/hjs/rsmenu-main.js') }}"></script>
<!-- op nav js -->
<script src="{{ asset('js/hjs/jquery.nav.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset('js/hjs/owl.carousel.min.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('js/hjs/slick.min.js') }}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{ asset('js/hjs/isotope.pkgd.min.js') }}"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{ asset('js/hjs/imagesloaded.pkgd.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('js/hjs/wow.min.js') }}"></script>
<!-- Skill bar js -->
<script src="{{ asset('js/hjs/skill.bars.jquery.js') }}"></script>
<script src="{{ asset('js/hjs/jquery.counterup.min.js') }}"></script>
<!-- counter top js -->

<!-- video js -->
<script src="{{ asset('js/hjs/jquery.mb.YTPlayer.min.js') }}"></script>
<!-- magnific popup js -->
<script src="{{ asset('js/hjs/jquery.magnific-popup.min.js') }}"></script>
<!-- tilt js -->
<script src="{{ asset('js/hjs/tilt.jquery.min.js') }}"></script>
<!-- plugins js -->
<script src="{{ asset('js/hjs/plugins.js') }}"></script>
<!-- contact form js -->
<script src="{{ asset('js/hjs/contact.form.js') }}"></script>
<!-- main js -->
<script src="{{ asset('js/hjs/main.js') }}"></script>
<script src="{{ asset('js/kjs/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/kjs/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/kjs/chosen.min.js') }}"></script>
<script src="{{ asset('js/kjs/countdown.min.js') }}"></script>
<script src="{{ asset('js/kjs/lightbox.min.js') }}"></script>
<script src="{{ asset('js/kjs/magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/kjs/slick.js') }}"></script>
<script src="{{ asset('js/kjs/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('js/kjs/threesixty.min.js') }}"></script>
<script src="{{ asset('js/kjs/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/kjs/mobilemenu.js') }}"></script>
<script src="{{ asset('js/kjs/functions.js') }}"></script>

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
<script src="{{asset('js/ujs/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
@endsection