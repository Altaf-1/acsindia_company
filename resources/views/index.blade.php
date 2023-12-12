@extends('layouts.main')
@section('title')
Academy of Civil Services | Best IAS Coaching in India
@endsection
@section('links')
<!-- meta tag -->
<meta charset="utf-8">
<title>Academy of Civil Services | Best IAS Coaching In INDIA</title>
<meta name="description" content="">
<!-- responsive tag -->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap  -->
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Main Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<!-- Slick  -->
<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-411743661"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'AW-411743661');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8391119276578244"
    crossorigin="anonymous"></script>

<script>
gtag('config', 'AW-411743661/VaRACJu54csYEK3rqsQB', {
    'phone_conversion_number': '06000505707'
});
</script>

<!-- Font Awesome  -->
<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="{{asset('js/sweetalert2.min.js')}}"></script>

<!--- font style for brand -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">


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
.whatsapp_float {
    position: fixed;
    bottom: 100px;
    right: 20px;
    z-index: 1000;
}

.fa-mob {
    color: #e52e06;
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
    background: "url({{ asset('comimages/apsc/center.png') }})";
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100%;
    min-height: 615px;

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
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.shadow_1 {
    box-shadow: 5px 10px #888888;
}

.shadow_2 {
    box-shadow: 5px 5px #888888;
}

.whatsapp_float {
    position: fixed;
    bottom: 150px;
    right: 20px;
    z-index: 1000;
    border-radius: 45px;
}

.fa-phone-top {
    color: black;
    padding-left: 0px;
    padding-top: 0px;
    font-size: 20px;
    color: #e52e06;
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
@endif
<!-- header area start -->
<!--   <div class="whatsapp_float">-->
<!--	<a href="https://wa.me/919085268769" target="_blank"><img src="{{asset('comimages/whatsapp.png')}}" width="60px" class="whatsapp_float_btn {{asset('comimages/uniweb/ab1.jpg')}}"/></a>-->
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
<!-- img/1.webp -->

<div class="fullwidth-template mt-5">
    <div style="padding-top:40px;" class="row mt-3 ml-2 bg-light">
        <div class="col-lg-6 mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <div style="background-color: #e52e06;" class="rounded border text-white text-center pb-3">
                        <h2 class="text-white font-weight-bold">Probable Questions</h2>
                        <a class="button text-white p-2 rounded text-white mb-2" href="{{asset('/Probable_Question')}}"
                            style="background-color: #230764; font-family: 'Righteous'; size: 22px"><span>Download
                                Now</span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="background-color: #e52e06;" class="rounded border text-white text-center pb-3">
                        <h2 class="text-white font-weight-bold">Sample Material</h2>
                        <a class="button text-white p-2 rounded text-white mb-2" href="{{asset('/sample_material')}}"
                            style="background-color: #230764; font-family: 'Righteous'; size: 22px"><span>Download
                                Now</span></a>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div style="background-color: #e52e06;" class="rounded border text-white text-center pb-3">
                        <h3 style="font-size: 28px;" class="text-white font-weight-bold">Previous Year Question Papers
                        </h3>
                        <a class="button text-white p-2 rounded text-white mb-2" href="{{asset('/sample_material')}}"
                            style="background-color: #230764; font-family: 'Righteous'; size: 22px"><span>Download
                                Now</span></a>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div style="background-color: #e52e06;" class="rounded border text-white text-center pb-3">
                        <h2 class="text-white font-weight-bold">Chapterwise Question & Answer</h2>
                        <a class="button text-white p-2 rounded text-white mb-2" href="{{asset('/sample_material')}}"
                            style="background-color: #230764; font-family: 'Righteous'; size: 22px"><span>Download
                                Now</span></a>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div style="background-color: #e52e06;" class="rounded border text-white text-center pb-3">
                        <h3 class="text-white font-weight-bold">Daily Current Affairs</h3>
                        <a class="button text-white p-2 rounded text-white mb-2" href="{{asset('/sample_material')}}"
                            style="background-color: #230764; font-family: 'Righteous'; size: 22px"><span>Download
                                Now</span></a>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <div style="background-color: #e52e06;" class="rounded border text-white text-center pb-3">
                        <h3 class="text-white font-weight-bold">Daily News Analysis Exam</h3>
                        <a class="button text-white p-2 rounded text-white mb-2" href="{{asset('/quiz/outside/Outside%20Course')}}"
                            style="background-color: #230764; font-family: 'Righteous'; size: 22px"><span>Download
                                Now</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-6">
            <a onclick="modal()">
                <img style="height: 500px;" src="img/online_course.png"/>
            </a>
            <script>
            function modal() {
                Swal.fire({
                    title: 'Pay Using',
                    html: '<div class="row justify-content-center">' +
                        ' <div class="card col-5 m-2">' +
                        '<a href="https://acsindiaias.com/apsc/course/54">\n' +
                        '<img src="{{asset('img/Frame 23.png')}}" width="100%">\n' +
                    ' </a>' +
                    '</div>\n' +
                    '<div class="card col-5 m-2">' +
                    '<a href="https://acsindiaias.com/apsc/course/55">\n' +
                    '  <img src="{{asset('img/Frame 24.png')}}" width="100%">\n' +
                    '</a>' +
                    '</div>' +
                    '</div>',
                    width: 800,
                })
            }
            </script>
        </div>
    </div>
    <div>
        <div class="section-017 mt-4 pt-4">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="kobolg-banner style-08 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="{{asset('comimages/2023/4.webp')}}" class="attachment-full size-full"
                                    alt="img">
                            </figure>
                            <div class="banner-info " style="text-align: center;">
                                <div class="banner-content">
                                    <div class="title-wrap">
                                        <h6 class="title" style="font-weight: bold; font-family: 'Righteous';">UPSC
                                        </h6>
                                        <br>
                                        <h6 class="title" style="font-weight: bold; font-family: 'Righteous';">
                                            PREPARATION
                                        </h6>
                                    </div>
                                    <div class="cate">
                                        ONLINE / OFFLINE CLASSES
                                    </div>
                                    <div class="button-wrap">
                                        <a class="button shadow_2" target="_self" href="{{asset('/upsc')}}"
                                            style="background-color: #e52e06; font-family: 'Righteous';"><span>View
                                                Details</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="kobolg-banner style-09 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="{{asset('comimages/2023/2.webp')}}" class="attachment-full size-full"
                                    alt="img">
                            </figure>
                            <div class="banner-info " style="text-align: center;">
                                <div class="banner-content">
                                    <div class="title-wrap">
                                        <h6 class="title" style="font-weight: bold; font-family: 'Righteous';">APSC
                                        </h6>
                                        <br>
                                        <h6 class="title" style="font-weight: bold; font-family: 'Righteous';">
                                            PREPARATION
                                        </h6>
                                    </div>
                                    <div class="cate">
                                        ONLINE / OFFLINE CLASSES
                                    </div>
                                    <div class="button-wrap">
                                        <a class="button shadow_2" target="_self" href="{{asset('/apsc')}}"
                                            style="background-color: #e52e06; font-family: 'Righteous';"><span>View
                                                Details</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="kobolg-banner style-10 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="{{asset('comimages/2023/3.webp')}}" class="attachment-full size-full"
                                    alt="img">
                            </figure>
                            <div class="banner-info " style="text-align: center;">
                                <div class="banner-content">
                                    <div class="title-wrap">
                                        <h6 class="title" style="font-weight: bold; font-family: 'Righteous';">SELF
                                        </h6>
                                        <br>
                                        <h6 class="title" style="font-weight: bold; font-family: 'Righteous';">STUDY
                                        </h6>
                                    </div>
                                    <div class="cate">
                                        RECORDED CLASSES
                                    </div>
                                    <div class="button-wrap">
                                        <a class="button shadow_2" target="_self" href="{{asset('/self-study')}}"
                                            style="background-color: #e52e06; font-family: 'Righteous';"><span>View
                                                Details</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container-fluid mt-5 mb-5">
                <div class="row">
                    <div class="col-lg-3 text-center p-2 pt-5 pb-5" style="background-color: #134982; font-family: 'Righteous';">
                        <h2 class="text-white">Daily News Analysis & Test</h2>
                        <a href="/quiz/outside/Outside%20Course" class="btn bg-white text-dark p-2 rounded font-weight-bold">Click For Test</a>
                    </div>
                    <div class="col-lg-3">
                        <iframe width="370" height="235" src="https://www.youtube.com/embed/BnVe8s6XNPY?si=Ro1_7OybkqqmY0yR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-3">
                        <iframe width="370" height="235" src="https://www.youtube.com/embed/OOJ5w1VxenQ?si=f8yvP_CQ3t01wIxv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-3">
                        <iframe width="370" height="235" src="https://www.youtube.com/embed/tR9pyQ-bFWA?si=oZggWB7nPb8--1i_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="rs-faq-part style1 md-pt-10 md-pb-70 mt-2">
                <div class="container-fluid m-2">
                    <div class="row">
                        <div class="col-lg-6 padding-0 about-intro">
                            <div class="main-part">
                                <h3 class="p-3 text-center text-white rounded" style="background-color: #134982; font-family: 'Righteous';">Topper's talk</h3>
                                <div class="row">
                                    <div class="col-lg-6 pt-5 col-sm-6 col-md-6 text-center justify-content-center">
                                        <iframe width="560" height="250" src="https://www.youtube.com/embed/uR0udaC3VDs?si=pxKbeE19I3stQEIC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                    <div class="col-lg-6 pt-5 col-sm-6 col-md-6 text-center justify-content-center">
                                        <iframe width="560" height="250" src="https://www.youtube.com/embed/VFFSM2jcFu8?si=8XTzdumeeRNzl-dv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                    <div class="col-lg-6 pt-5 col-sm-6 col-md-6 text-center justify-content-center">
                                        <iframe width="560" height="250" src="https://www.youtube.com/embed/118tVGOgM5A?si=LxW84yVty3ornh89" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                    <div class="col-lg-6 pt-5 col-sm-6 col-md-6 text-center justify-content-center">
                                        <iframe width="560" height="250" src="https://www.youtube.com/embed/lzmWZr3G9FQ?si=dqf_erkBx5dE9Inv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div>
                                <img src="comimages/2023/result.jpeg" class="img-fluid w-60" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gray-bg2">
            <div class="container pb-5 pt-5">
                <div class="row justify-content-center pb-3 pt-2 pb-2">
                    <div class="col-md-8 text-center heading-section">
                        <h2 class="mb-4 text-uppercase" style="font-family: 'Righteous';">Upcoming Events</h2>
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
                                                FREE
                                                SEMINAR</h3>
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
                                            <!-- /acs_seminar -->
                                            <a href="" class="btn text-white font-weight-bold mb-4 shadow_2"
                                                style="background-color: #e52e06;">UPCOMING<i
                                                    class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 bg-light p-3">
                        <div class="row ">
                            <div class="col-lg-4">
                                <img src="{{ asset('comimages/2023/e-2.webp') }}" alt="images">
                            </div>
                            <div class="col-lg-7">
                                <div class="course-info">
                                    <h3 class="course-title">
                                        <a href="/acs_seminar">
                                            <h3 class="font-weight-bold" style="font-family: 'Righteous';">APSC/UPSC
                                                FREE
                                                WEBINAR</h3>
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
                                            <!-- /acs_webinar -->
                                            <a href="" class="btn text-white font-weight-bold mb-4 shadow_2"
                                                style="background-color: #e52e06;">UPCOMING<i
                                                    class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section class="ftco-section ftco-counter img pt-3" id="section-counter" data-stellar-background-ratio="0.5">
            <div class="container pt-5">
                <div class="row justify-content-center mb-5 pb-2 d-flex">
                    <div class="col-md-6 align-items-stretch d-flex">
                        <div class="img img-video d-flex align-items-center"
                            style="background-image: url({{asset('comimages/2023/ab1.webp')}});">
                            <div class="video justify-content-center">
                                <a href="https://youtu.be/sj7yyVqQvHc"
                                    class="icon-video d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('comimages/icons/acslog.png') }}" style="width:220px"
                                        alt="images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 heading-section heading-section-white pl-lg-5 pt-md-0 pt-1">
                        <div class="py-md-5">
                            <div class="heading-section heading-section-white mb-5">
                                <h2 class="mb-4" style="font-family: 'Righteous';">Request For Counselling</h2>
                            </div>
                            <form method="get" action="{{route('query')}}" class="appointment-form">
                                @csrf
                                <div class="d-md-flex">
                                    <div class="form-group">
                                        <input type="text" class="form-control" type="text" name="name" id="contactName"
                                            placeholder="First Name" title="Your Full Name" required />
                                    </div>
                                    <div class="form-group ml-md-4">
                                        <input type="text" class="form-control" type="email" name="email"
                                            id="contactEmail" placeholder="Last Name" title="Your Email" required />
                                    </div>
                                    <div class="form-group ml-md-4">
                                        <input type="number" class="form-control" placeholder="Phone" name="phone"
                                            id="contactSubject" required />
                                    </div>
                                </div>

                                <div class="d-md-flex">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="2" class="form-control"
                                            placeholder="Message" id="contactMessage" required></textarea>
                                    </div>
                                    <div class="form-group ml-md-4">
                                        <input type="submit" value="Submit" class="btn py-7 px-7 shadow_2"
                                            style="background-color: #e52e06; font-family: 'Righteous';">
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
                                        <span style="font-family: 'Righteous';">Certified Teachers</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex justify-content-center counter-wrap ">
                                <div class="block-18">
                                    <div class="text">
                                        <strong class="number" data-number="13151">0</strong>
                                        <span style="font-family: 'Righteous';">Students</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex justify-content-center counter-wrap ">
                                <div class="block-18">
                                    <div class="text">
                                        <strong class="number" data-number="10">0</strong>
                                        <span style="font-family: 'Righteous';">Courses</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex justify-content-center counter-wrap ">
                                <div class="block-18">
                                    <div class="text">
                                        <strong class="number" data-number="18">0</strong>
                                        <span style="font-family: 'Righteous';">Awards Won</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section>
        <div style="background-color: #cc3d1e">
            <div class="row justify-content-center text-center text-white">
                <div class="col-lg-8">
                    <div class="section-title with-p mb-0 p-4">
                        <h2 class="mb-0" style="font-family: 'Righteous';">VISIT OUR INSTITUTE</h2>
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
                            <p><i class="fa fa-phone"></i></p>
                            <!--<img class="secondary-color" style="width:70px; boder: 1px solid black; border-radius: 30%; padding-top: 10px;" src="{{asset('comimages/phone.gif')}}">-->
                            <h3 style="padding-top: 25px; padding-left: 20px; color: #fff;">6000505707</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="d-flex flex-row">
                            <i class="fa-sharp fa-solid fa-envelope"></i>
                            <!--<img class="secondary-color" style="width:70px; boder: 1px solid black; border-radius: 30%; padding-top: 10px;" src="{{asset('comimages/gmail.gif')}}">-->
                            <h4 style="padding-top: 25px; padding-left: 20px; color: #fff;">acsindia.ias@gmail.com
                            </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="d-flex flex-row">
                            <div class="d-flex flex-column">
                                <h4 class="text-center underline"
                                    style="padding-top: 15px; padding-left: 30px; color: #fff;">
                                    <u>
                                        <spam style="padding-right: 10px;"><i class="fa-solid fa-thumbtack"></i>
                                        </spam>
                                        DIBRUGARH CENTER
                                    </u>
                                </h4>
                                <h4 style="padding-left: 40px; color: #fff;">NALIAPOOL,DIBRUGARH</h4>
                                <h4 style="padding-left: 40px; color: #fff;">Near Ganesh Mandir</h4>
                                <h4 style=" padding-left: 40px; color: #fff;">District: Dibrugarh</h4>
                                <h4 style=" padding-left: 40px; color: #fff;">PIN Code: 786001</h4>
                                <h4 style=" padding-left: 40px; color: #fff;">State: Assam</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="d-flex flex-row">
                            <div class="d-flex flex-column">
                                <h4 class=" underline" style="padding-top: 15px; padding-left: 20px; color: #fff;">
                                    <u>
                                        <spam style="padding-right: 10px;"><i class="fa-solid fa-thumbtack"></i>
                                        </spam>
                                        GUWAHATI CENTER
                                    </u>
                                </h4>
                                <h4 style="padding-left: 40px; color: #fff;">3rd floor, Chitrabon Enclave, R G
                                    BARUAH
                                    ROAD,
                                </h4>
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

    <main>

        <a href="#" class="backtotop active">
            <i class="fa fa-angle-up"></i>
        </a>
    </main>
    <!-- Modal -->
    @endsection
    @section('footer')
    @include('partials.footer')
    @endsection
    @section('mob_navbar')
    @include('partials.mob_navbar')
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