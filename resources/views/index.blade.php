@extends('layouts.main')
@section('title')
Academy of Civil Services | Best APSC Coaching in ASSAM
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

.shadow_1 {
    box-shadow: 5px 10px #888888;
}

.shadow_2 {
    box-shadow: 5px 5px #888888;
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
    <!-- Main content Start -->
    <div class="main-content">

        <!-- Slider Section Start -->
        <div class="">
            <!-- Slider Section Start -->
            <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active custom-slider">
                        <a href="">
                            <img class="d-block w-100 h-100" src="{{asset('comimages/2023/head/2.png')}}"
                                alt="First slide">
                        </a>
                    </div>
                    <div class="carousel-item custom-slider">
                        <a href="">
                            <img class="d-block w-100 h-100" src="{{asset('comimages/2023/apsc-1.webp')}}"
                                alt="First slide">
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
            <!-- Slider Section End -->
        </div>
        <!-- About Section Start -->
        <div class="rs-faq-part style1 pb-100 md-pt-70 md-pb-70 mt-2">
            <div class="container-fluid m-2">
                <div class="row">
                    <div class="col-lg-6 padding-0 about-intro">
                        <div class="main-part">
                            <div class="title mb-40 md-mb-15 mb-5">
                                <h2 class="text-part text-white text-center mt-5"
                                    style="background-color: #e52e06; font-family: 'Righteous';">OUR COURSE DETAILS</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:110px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/d5.png')}}">
                                    <!--<a href="https://acsindiaias.com/apsc/courses"><h3 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2">Online Courses</h3></i></a>-->
                                    <a href="{{asset('/apsc/courses')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">Online Courses</a>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:110px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/d5.png')}}">
                                    <!--<a href="https://acsindiaias.com/offline"><h3 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2">Offline Courses</h3></i></a>-->
                                    <a href="{{asset('/offline')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">Offline Courses</a>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:110px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/d1.png')}}">
                                    <!--<a href="https://acsindiaias.com/upsc_recorded_course"><h4 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2">Reorded Courses</h4></i></a>-->
                                    <a href="{{asset('/upsc_recorded_course')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">Reorded Courses</a>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:110px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/d2.png')}}">
                                    <!--<a href="{{route('dailynewsanalyse.index')}}"><h4 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2">Daily News</h4></i></a>-->
                                    <a href="{{route('dailynewsanalyse.index')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">Daily News</a>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:110px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/d4.png')}}">
                                    <!--<a href="{{route('current.affair.index', 'current_affair')}}"><h4 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2">Current Affairs</h4></i></a>-->
                                    <a href="/current_affairs_2023"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">Current Affairs</a>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:130px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/cr.png')}}">
                                    <!--<a href="https://acsindiaias.com/acsall"><h4 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2">ACS Degipedia</h4></i></a>-->
                                    <a href="{{asset('/acsall')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">ACS Degipedia</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 padding-0">
                        <div class="img-part media-icon">
                            <a class="popup-videos" href="https://www.youtube.com/watch?v=sj7yyVqQvHc">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Blog Section End -->

        <!-- Blog Section Start -->
        <div id="rank" class="rs-blog main-home md-pt-10 md-pb-70">
            <div class="text-center mb-5">
                <h1 class="text-white text-center pt-3 pb-3"
                    style="background-color: #e52e06; font-family: 'Righteous';"> OUR APSC RESULTS</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mt-3">
                        <img src="{{asset('comimages/apsc/result_n.png')}}" style="height: 550px" class="img-fluid"
                            alt="Responsive image">
                    </div>
                    <div class="col-lg-6 mt-3">
                        <img src="{{asset('comimages/head/topm.png')}}" style="height: 550px" class="img-fluid"
                            alt="Responsive image">
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

        <section class="gray-bg2">
            <div class="container pb-4">
                <div class="row justify-content-center pb-3 pt-5 pb-5">
                    <div class="col-md-8 text-center heading-section">
                        <h2 class="mb-4 text-uppercase text-white"
                            style="background-color: #e52e06; font-family: 'Righteous';">Upcoming Events</h2>
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
                                        <a href="{{asset('/acs_seminar')}}">
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
                                            <a href="{{asset('/acs_webinar')}}"
                                                class="btn text-white font-weight-bold mb-4"
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