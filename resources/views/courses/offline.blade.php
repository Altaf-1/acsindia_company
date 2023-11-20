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
<!-- favicon -->
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
@endsection
@section('styles')
<style>
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
<header id="header">
    <!-- #navigation start class="transparent-header"-->
    @include('partials.navbar')
    <!-- #navigation end -->
</header>
<main>

    <div class="whatsapp_float">
        <a href="https://wa.me/919085268769" target="_blank"><img src="{{asset('comimages/whatsapp.png')}}" width="80px"
                class="whatsapp_float_btn" /></a>
    </div>
    <!--header content area start  position-center-->
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img src="{{asset('comimages/offline/1.png')}}" class="rounded" alt="Cinque Terre">
            </div>
            <div class="col-lg-5">
                <img src="{{asset('comimages/offline/2.png')}}" class="rounded" alt="Cinque Terre">
            </div>
        </div>
    </div>

    <div class="text-center container-fluid p-2 mb-2 post-heading-center mb-60 mt-5" style="background-color: #134982">
        <h2 data-aos="fade-right" class="text-white ml2">OFFLINE COURSE DETAILS</h2>
    </div>
    <div class="rs-faq-part style1 pb-100 md-70 md-pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div id="rs-about" class="rs-about style1 pb-10 md-pb-10" !important">
                        <div class="notice-bord style1">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="desc">Free Access To Recorded Class For Lifetime.
                                        </a></div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="desc">Prelims + Mains + Interview Training + Optional Subjects.
                                        </a></div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="desc">Soft Copies and HardCopies Of Study Materials (Free).
                                        </a></div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="desc">Model Test Series For Prelims & Mains.
                                        </a></div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="desc">Mains Answer Writing Practice & Evaluation.
                                        </a></div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="desc">For More Details ->DIBRUGARH CENTER: 6000505707
                                        </a></div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="desc">For More Details ->GUWAHATI CENTER: 6000793224
                                        </a></div>
                                </li>

                            </ul>
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
    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us gray-bg pb-120 md-pt-70 md-pb-80 pt-4">
        <div class="container-fluid ml-5 mr-5">
            <div class="row align-items-center">
                <div class="col-lg-5 lg-pr-0 md-mb-50">
                    <div class="choose-us-part">
                        <div class="sec-title wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <h2 class="title mb-20">Why Choose Us</h2>

                        </div>
                        <div class="facilities-part mt-5">
                            <div class="single-facility wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="icon-part one">
                                    <img class="shape-img"
                                        style="width:50px; boder: 1px solid black; border-radius: 30%;"
                                        src="{{asset('comimages/icons/d1.png')}}" alt="Shape Image">
                                </div>
                                <div class="text-part">
                                    <h2>Qualified Teachers</h2>
                                    <p class="desc">We provide teachers with experience and in-depth knowledge about
                                        civil services.</p>
                                </div>
                            </div>
                            <div class="single-facility wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="icon-part one">
                                    <img class="shape-img"
                                        style="width:50px; boder: 1px solid black; border-radius: 30%;"
                                        src="{{asset('comimages/icons/d4.png')}}" alt="Shape Image">
                                </div>
                                <div class="text-part">
                                    <h2>Online & Offline Classes</h2>
                                    <p class="desc">We provide online & Offline classes at a minimal cost and at your
                                        own convenience.</p>
                                </div>
                            </div>
                            <div class="single-facility wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="icon-part one">
                                    <img class="shape-img"
                                        style="width:50px; boder: 1px solid black; border-radius: 30%;"
                                        src="{{asset('comimages/icons/cr.png')}}" alt="Shape Image">
                                </div>
                                <div class="text-part">
                                    <h2>High Quality Materials</h2>
                                    <p class="desc">We provide high content materials prepared by our own faculities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 lg-pl-0">
                    <div class="free-course-contact">
                        <div id="form-messages"></div>
                        <form class="themeioan-form-contact form" method="get" action="{{route('query')}}">
                            @csrf
                            <!-- Change Placeholder and Title -->
                            <div>
                                <input class="input-text required-field" style="border-radius: 35px;" type="text"
                                    name="name" id="contactName" placeholder="Name" title="Your Full Name" />
                            </div>
                            <div>
                                <input class="input-text required-field email-field" style="border-radius: 35px;"
                                    type="email" name="email" id="contactEmail" placeholder="Email"
                                    title="Your Email" />
                            </div>
                            <div>
                                <input class="input-text required-field" type="text" style="border-radius: 35px;"
                                    name="phone" id="contactSubject" placeholder="Phone number" />
                            </div>
                            <div>
                                <textarea class="input-text required-field" name="message" style="border-radius: 35px;"
                                    id="contactMessage" placeholder="Message" title="Your Message"></textarea>
                            </div>
                            <div class="form-btn submit-btn mt-30">
                                <button class="btn-info" type="submit">Submit Query</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->
    </div>
    </div>

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
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-235408727-1"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-235408727-1');
</script>
<script>
$('#exampleModalCenter').on('hide.bs.modal', () => {
    let video = $("#ytplayer").attr("src");
    $("#ytplayer").attr("src", "");
    $("#ytplayer").attr("src", video);
})
$('.carousel').carousel({
    interval: 3000
})
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({
        loop: false
    })
    .add({
        targets: '.ml2 .letter',
        scale: [4, 1],
        opacity: [0, 1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 5000,
        delay: (el, i) => 90 * i
    }).add({
        targets: '.ml2',
        opacity: 1,
        duration: 1,
        easing: "easeOutExpo",
        delay: 1
    });

AOS.init();
</script>

@endsection