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
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/style.css')}}">
<!-- This stylesheet dynamically changed from style.less -->
<!-- responsive css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/responsive.css')}}">
@endsection
@section('styles')
<style>
.whatsapp_float {
    position: fixed;
    bottom: 100px;
    right: 20px;
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
    <!--Preloader area start here-->
    <!--<div id="loader" class="loader purple-color">-->
    <!--	<div class="loader-container">-->
    <!--		<div class='loader-icon'>-->
    <!--			<img src="{{asset('comimages/c-logo.png')}}" alt="">-->
    <!--		</div>-->
    <!--	</div>-->
    <!--</div>-->
    <!--Preloader area End here-->
    <div class="whatsapp_float">
        <a href="https://wa.me/919085268769" target="_blank"><img src="{{asset('comimages/whatsapp.png')}}" width="80px"
                class="whatsapp_float_btn" /></a>
    </div>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-photo themeioan_event">
                    <div class="date mt-5" style="background-color: #92089e;">
                        <h4><span>3</span> Sep, 2023</h4>
                    </div>
                    <img src="{{asset('comimages/head/3.jpg')}}" style="height: 400px; width: 100%;" alt="">
                    <!--<img src="{{asset('comimages/eventias.webp')}}" alt="">-->
                    <!--<img src="{{asset('comimages/head/dibru.png')}}" style="height: 400px; width: 100%;" alt="">-->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column">
                    <h2 class="text-center text-white" style="background-color: #129ea3; border-radius: 30px;">UPCOMING
                        EVENTS</h2>
                    <h3 class="text-center mt-4">SEMINAR</h3>
                    <table class="table bg-light mt-3 justify-content-center">
                        <tbody>
                            <tr>
                                <td>Date</td>
                                <td>&nbsp;</td>
                                <td>3rd Sep, 2023</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>&nbsp;</td>
                                <td>600793224</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>&nbsp;</td>
                                <td>Guwahati Branch</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-section">
                        <form action="{{asset('/scholarship-registration')}}">
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

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-photo themeioan_event">
                    <div class="date mt-5" style="background-color: #92089e;">
                        <h4><span>3</span> Sep, 2023</h4>
                    </div>
                    <!--<img src="{{asset('comimages/eventias.webp')}}" alt="">-->
                    <!--<img src="{{asset('comimages/head/ghu.png')}}" style="height: 400px; width: 100%;" alt="">-->
                    <img src="{{asset('comimages/head/dibru.png')}}" style="height: 400px; width: 100%;" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column">
                    <h2 class="text-center text-white" style="background-color: #129ea3; border-radius: 30px;">UPCOMING
                        EVENTS</h2>
                    <h3 class="text-center mt-4">SEMINAR</h3>
                    <table class="table bg-light mt-3 justify-content-center">
                        <tbody>
                            <tr>
                                <td>Date</td>
                                <td>&nbsp;</td>
                                <td>3rd Sep, 2023</td>
                            </tr>
                            <tr>
                                <td>Time</td>
                                <td>&nbsp;</td>
                                <td>10.00a.m - 12.30p.m</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>&nbsp;</td>
                                <td>Dibrugarh Branch</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-section">
                        <form action="{{asset('/seminar')}}">
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


    <!--2nd section-->
    <!--<div class="container mt-4 mb-4" >-->
    <!--	<div class="row">-->
    <!--		<div class="col-lg-6">-->
    <!--			<div class="event-photo themeioan_event">-->
    <!--				<div class="date" style="background-color: #92089e;">-->
    <!--					<h4><span>11</span> September, 2022</h4>-->
    <!--				</div>-->
    <!--<img src="{{asset('comimages/eventias.webp')}}" alt="">-->
    <!--				<img src="{{asset('comimages/head/1.png')}}" style="height: 400px; width: 100%;" alt="">-->
    <!--			</div>-->
    <!--		</div>-->
    <!--		<div class="col-lg-6">-->
    <!--			<div class="d-flex flex-column">-->
    <!--				<h2 class="text-center text-white" style="background-color: #129ea3; border-radius: 30px;">UPCOMING EVENTS</h2>-->
    <!--				<h3 class="text-center mt-4">SEMINAR</h3>-->
    <!--				<table class="table bg-light mt-3 justify-content-center">-->
    <!--					<tbody>-->
    <!--						<tr>-->
    <!--							<td>Date</td>-->
    <!--							<td>&nbsp;</td>-->
    <!--							<td>11 September, 2022</td>-->
    <!--						</tr>-->
    <!--						<tr>-->
    <!--							<td>Time</td>-->
    <!--							<td>&nbsp;</td>-->
    <!--							<td>2 pm - 4 pm</td>-->
    <!--						</tr>-->
    <!--						<tr>-->
    <!--							<td>Location</td>-->
    <!--							<td>&nbsp;</td>-->
    <!--							<td>Dibrugarh</td>-->
    <!--						</tr>-->
    <!--					</tbody>-->
    <!--				</table>-->
    <!--				<div class="btn-section">-->
    <!--					<form action="/offline_seminar">-->
    <!--						<button type="submit" style="width:250px;">-->
    <!--							<span>Book Now</span>-->
    <!--							<div class="liquid"></div>-->
    <!--						</button>-->
    <!--					</form>-->
    <!--				</div>-->
    <!--			</div>-->
    <!--		</div>-->
    <!--	</div>-->
    <!--</div>-->


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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-235408727-1"></script>

@endsection