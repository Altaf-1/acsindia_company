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
<header id="header" >
	<!-- #navigation start class="transparent-header"-->
	@include('partials.navbar')
	<!-- #navigation end -->
</header>
<main>
	<!--Preloader area start here-->
	<div id="loader" class="loader purple-color">
		<div class="loader-container">
			<div class='loader-icon'>
				<img src="{{asset('comimages/c-logo.png')}}" alt="">
			</div>
		</div>
	</div>
	<!--Preloader area End here-->
	<div class="whatsapp_float">
		<a href="https://wa.me/919085268769" target="_blank"><img src="{{asset('comimages/whatsapp.png')}}" width="80px" class="whatsapp_float_btn"/></a>
	</div>
	<!--header content area start  position-center-->
	<div class="">
		<!-- Slider Section Start -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active custom-slider">
				    <a href="">
				        <img class="d-block w-100 h-100" src="{{asset('comimages/head/2.webp')}}" alt="First slide">
				    </a>
				</div>
				<div class="carousel-item custom-slider">
					<a href="">
				        <img class="d-block w-100 h-100" src="{{asset('comimages/head/7-2.webp')}}" alt="First slide">
				    </a>
				</div>
				<div class="carousel-item custom-slider">
					<a href="https://acsindiaias.com/apsc">
				        <img class="d-block w-100 h-100" src="{{asset('comimages/head/8-2.webp')}}" alt="First slide">
				    </a>
				</div>
				<div class="carousel-item custom-slider">
					<a href="">
				        <img class="d-block w-100 h-100" src="{{asset('comimages/head/9-2.webp')}}" alt="First slide">
				    </a>
				</div>
				<div class="carousel-item custom-slider">
					<a href="">
				        <img class="d-block w-100 h-100" src="{{asset('comimages/head/6.webp')}}" alt="First slide">
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
	</div>
	<!-- About Section Start -->
            <div id="rs-about" class="rs-about style1 pb-10 md-pb-10" style="margin-top:80px; !important">
                <div class="container">
                    <div class="row">
                            <div class="col-lg-4 order-last">
                            <div class="notice-bord style1">
                                <h4 class="title bg-dark">Notifications</h4>
                                <ul>
                                    <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                        <div class="date"><span>20</span>June</div>
                                        <div class="desc"><a href="#features">New UPSC ADVANCED BATCH 2023 launched.</a></div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                        <div class="date"><span>22</span>Aug</div>
                                        <div class="desc"><a href="https://www.acsindiaias.com/apsc/courses?">New APSC ADVANCED BATCH 2023 launched.</a></div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                        <div class="date"><span>14</span>May</div>
                                        <div class="desc"><a href="https://acsindiaias.com/apsc">IAS WEBINAR</a></div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                        <div class="date"><span>28</span>August</div>
                                        <div class="desc"><a href="/acs_seminar">IAS OFFLINE SEMINAR</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 pr-50 md-pr-15">
                            <div class="about-part">
                                <div class="sec-title mb-40">
                                    <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">Guidance For Civil Services :</h2>
                                    <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms"><a href="#features" style="box-shadow: 5px 10px #888888; background-color: #345c72;" class="readon green-banner mt-4 mr-3">Free Exam Materials</a><a href="/prelims_exam" style="box-shadow: 5px 10px #888888; background-color: #345c72;" class="readon green-banner mt-4 mr-3 ">For Prelims</a><a href="/qmains" style="box-shadow: 5px 10px #888888; background-color: #345c72;" class="readon green-banner mt-4 mr-3 ">For Mains</a><a href="#features" style="box-shadow: 5px 10px #888888; background-color: #345c72;" class="readon green-banner mt-4 mr-3 ">Upsc Courses</a><a href="https://www.acsindiaias.com/apsc/courses?" style="box-shadow: 5px 10px #888888; background-color: #345c72;" class="readon green-banner mt-4 mr-3">Apsc Courses</a><a href="https://www.acsindiaias.com/current-affair" style="box-shadow: 5px 10px #888888; background-color: #345c72;" class="readon green-banner mt-4 mr-3 ">Current Affairs</a><a href="{{route('apsc_rank')}}" style="box-shadow: 5px 10px #888888; background-color: #345c72;" class="readon green-banner mt-4 mr-3 ">Our Results</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->
            
           <div id="plan" class="rs-degree style1 modify gray-bg pt-100 pb-70 md-pt-70 md-pb-40">
		<div class="container">
			<div class="row y-middle">
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="sec-title wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
						<div class="sub-title primary">We Provide</div>
						<h2 class="mb-0">Successful Plan To Crack UPSC & APSC</h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="degree-wrap">
						<img class="m-0 p-0" href="2+2 session" src="{{asset('comimages/su-6.webp')}}" alt="">
						<div class="title-part">
							<h4 class="title">2 + 2 SESSION</h4>
						</div>
						<div class="content-part">
							<h4 class="title"><a href="/2+2_session">2 + 2 SESSION</a></h4>
							<p class="desc text-white">The second day of the second week class will be called as 2+2 Session.</p>
							<div class="btn-part">
								<a href="/2+2_session">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="degree-wrap">
						<img class="m-0 p-0" src="{{asset('comimages/su-2.webp')}}" alt="">
						<div class="title-part">
							<h4 class="title">RRR SESSION</h4>
						</div>
						<div class="content-part">
							<h4 class="title"><a href="/rrr_session">RRR SESSION</a></h4>
							<p class="desc text-white">The third day of the third week class is called as RRR Session.</p>
							<div class="btn-part">
								<a href="/rrr_session">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="degree-wrap">
						<img class="m-0 p-0" src="{{asset('comimages/su-3.webp')}}" alt="">
						<div class="title-part">
							<h4 class="title">PRIME SESSION</h4>
						</div>
						<div class="content-part">
							<h4 class="title"><a href="/prime_session">PRIME SESSION</a></h4>
							<p class="desc text-white">The first session or the first class or the first day’s session of every month is called a Prime Session.</p>
							<div class="btn-part">
								<a href="/prime_session">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="degree-wrap">
						<img class="m-0 p-0" src="{{asset('comimages/su-4.webp')}}" alt="">
						<div class="title-part">
							<h4 class="title">TIPS & TRICKS</h4>
						</div>
						<div class="content-part">
							<h4 class="title"><a href="/tips_tricks_session">TIPS & TRICKS</a></h4>
							<p class="desc text-white">The second Friday’s class of the second week is called as Tips & Tricks’ Session.</p>
							<div class="btn-part">
								<a href="/tips_tricks_session">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="degree-wrap">
						<img class="m-0 p-0" src="{{asset('comimages/su-5.webp')}}" alt="">
						<div class="title-part">
							<h4 class="title">TOPPERS SESSION</h4>
						</div>
						<div class="content-part">
							<h4 class="title"><a href="/toppers_session">TOPPERS SESSION</a></h4>
							<p class="desc text-white">The fourth day’s class of the fourth week session is called as Toppers Session.</p>
							<div class="btn-part">
								<a href="/toppers_session">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
            
	<!-- Strat Knowledge Section -->
	<div id="features" class="wrap-bg container-fluid pt-0 pb-3" >
		<!-- .container style="background-color: #129ea3;"-->
		<div class="container-fluid p-0">
			<div class="text-center bg-dark container-fluid p-2 mb-2 post-heading-center mb-60" >
				<h2 data-aos="fade-right" class="text-white ml2">Knowledge Center for IAS</h2>
			</div>
			<!-- .row -->
		</div>
		<div class="row mb-3">
			<div class="col-lg-8 col-sm-12 col-xs-12">
				<div class="row container">
					<div class="col-lg-6 col-sm-12 col-xs-12">
						<div  class="single-features-light text-center shadow rounded" style="background-color: #345c72;">
							<!-- single features -->
							<div class="move" >
								<!-- uses solid style -->
								<img class="text-danger p-1" style="width:90px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/book.gif')}}">
								<a href="/acsall">
									<h4 class="font-weight-bold" style="color:#fff;" >ACS DIGIPEDIA</h4>
								</a>
								<p class="text-white">Download Free IAS Resources.</p>
								<div class="feature_link">
									<a href="/acsall" class="text-white">Click here <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-12 col-xs-12">
						<div class="single-features-light text-center shadow rounded" style="background-color: #345c72;">
							<!-- single features -->
							<div class="move">
								<img class="text-danger p-1" style="width:90px; boder: 1px solid black; border-radius: 20px; " src="{{asset('comimages/computer.gif')}}">
								<a href="{{route('dailynewsanalyse.index')}}">
									<h4 class=" font-weight-bold" style="color:#fff;">
										Daily News Analysis
									</h4>
								</a>
								<p class="text-white">Stay Updated.</p>
								<div class="feature_link">
									<a href="{{route('dailynewsanalyse.index')}} " class="text-white">Click here <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mt-2 col-sm-12 col-xs-12">
						<div class="single-features-light text-center shadow rounded" style="background-color: #345c72;">
							<!-- single features -->
							<div class="move">
								<img class="secondary-color p-1" style="width:90px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/gears.gif')}}">
								<a href="/currentaffairs">
									<h4 class="font-weight-bold" style="color:#fff;">CURRENT AFFAIRS</h4>
								</a>
								<p class="text-white">Know how to crack the civil services exam.</p>
								<div class="feature_link">
									<a href="/currentaffairs" class="text-white">Click here <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mt-2 col-sm-12 col-xs-12">
						<div class="single-features-light text-center shadow rounded" style="background-color: #345c72; box-shadow: 10px 10px 5px grey;">
							<!-- single features -->
							<div class="move">
								<img class="secondary-color p-1" style="width:90px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/home.gif')}}">
								<a href="https://drive.google.com/file/d/1-xhZKrZS17PcvQMWukDs1ln7fdD0pIco/view?usp=sharing">
									<h4 class="font-weight-bold text-uppercase" style="color:#fff;">upsc exam calendar</h4>
								</a>
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
				<img style="width: 500px; height: 470px; border-radius: 35px; box-shadow: 5px 10px 8px 10px #888888;" src="{{ asset('comimages/know.webp')}}">
			</div>
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
	<!-- End Knowledge Section -->
	<!-- Apsc Section -->
	<div class="m-4">
		<div class="text-center bg-dark container-fluid p-2 mb-2 post-heading-center mb-60">
			<h2 data-aos="fade-right" class="text-white ml2">GEAR UP FOR APSC</h2>
		</div>
		<div class="row">
			<div data-aos="fade-right" class=" col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-5 why-us-left-bg">
				<img style="height:550px; width:800px" target="_blank" src="{{asset('comimages/head/result.png')}}"/></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-7 wrap-padding">
				<div class="section-title">
					<div>
						<h4 data-aos="fade-left">The course focuses on the strategic methods for all the subjects required for APSC. It also includes the CSAT paper with proper guidance along with current affairs and test series to boost up the knowledge.</h4>
						<h4 data-aos="fade-left">Our Institute believes in excellence and therefore we provide Personal Mentoring in every aspect. This feature is relevant to all the three stages be it Prelims, Mains and Interview.</h4>
						<a href="{{route('login')}}" style="box-shadow: 5px 10px #888888; background-color: #345c72;"  class="readon green-banner mt-4">Get Insights From Our TOPPERS </a><br>
						<a href="{{route('login')}}" style="box-shadow: 5px 10px #888888; background-color: #345c72;" class="readon green-banner mt-4">VISIT APSC WEBSITE</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End APSC Section -->
	<div class="justify-content-center container pb-3" data-aos="fade-right">
		<a href="https://drive.google.com/file/d/1ENBUdfrN-O7bxFQLwKz3ytfqQJu-VcL7/view?usp=sharing" class=" btn color-two button text-white">READ OUR ACS WISDOM</a>
		<form action="https://drive.google.com/file/d/1r2YteXc6JC8gEymFN_EjPR6NR-CciqIj/view?usp=sharing">
			<button type="submit" style="width:250px;">
				<span>ACS WISDOM</span>
				<div class="liquid"></div>
			</button>
		</form>
	</div>
	<!-- Degree Section Start -->
	<!--Why choose us section-->
	<!--<section>-->
	<!--	<div class="post-heading-center section-title mb-60 container-fluid p-2" style="background-color: #129ea3;">-->
	<!--		<h2 data-aos="fade-right" class="text-white ml2">WHY CHOOSE US </h2>-->
	<!--	</div>-->
	<!--	<div class="container">-->
	<!--		<div class="row align-items-center mb-5">-->
	<!--			<div class="col-sm-6 col-lg-4 mb-2-9 mb-sm-0">-->
	<!--				<div class="pr-md-3">-->
	<!--					<div class="text-center text-sm-right mb-2-9">-->
	<!--						<div class="mb-4">-->
	<!--							<img class="secondary-color" style="width:90px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/people.gif')}}">-->
	<!--						</div>-->
	<!--						<h4 class="sub-info">Qualified Teachers</h4>-->
	<!--						<p class="display-30 mb-0">We provide teachers with experience and in-depth knowledge about civil services.</p>-->
	<!--					</div>-->
	<!--					<div class="text-center text-sm-right">-->
	<!--						<div class="mb-4">-->
	<!--							<img class="secondary-color" style="width:90px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/phone.gif')}}">-->
	<!--						</div>-->
	<!--						<h4 class="sub-info">24 x 7 support</h4>-->
	<!--						<p class="display-30 mb-0">We provide support & guidance anytime you want.</p>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-lg-4 d-none d-lg-block">-->
	<!--				<div class="why-choose-center-image">-->
	<!--					<img src="{{asset('comimages/choose.png')}}" alt="..." class="rounded-circle">-->
	<!--				</div>-->
	<!--			</div>-->
	<!--			<div class="col-sm-6 col-lg-4">-->
	<!--				<div class="pl-md-3">-->
	<!--					<div class="text-center text-sm-left mb-2-9">-->
	<!--						<div class="mb-4">-->
	<!--							<img class="secondary-color" style="width:90px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/book.gif')}}">-->
	<!--						</div>-->
	<!--						<h4 class="sub-info">Online & Offline Classes</h4>-->
	<!--						<p class="display-30 mb-0">We provide online & Offline classes at a minimal cost and at your own convenience.</p>-->
	<!--					</div>-->
	<!--					<div class="text-center text-sm-left">-->
	<!--						<div class="mb-4">-->
	<!--							<img class="secondary-color" style="width:90px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/video.gif')}}">-->
	<!--						</div>-->
	<!--						<h4 class="sub-info">High Quality Materials</h4>-->
	<!--						<p class="display-30 mb-0">We provide high content materials prepared by our own faculities.</p>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</section>-->
	<!-- End Why choose us section-->
	<!-- courses area start -->
	<!-- courses area end -->
	<!-- teachers area start -->
	<section id="ourteam">
		<div id="teachers" class="wrap-bg wrap-bg-dark pt-0 bg-light">
			<div class="container-fluid">
				<div class="row justify-content-center text-center bg-dark">
					<div class="col-lg-8">
						<div class="section-title with-p text-white mb-0 p-4">
							<h2 data-aos="fade-right" class="mb-0">Meet Our Professional Team</h2>
						</div>
					</div>
				</div>
				<br>
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
	
	<section>
	    <div id="events" class="wrap-bg wrap-bg-dark bg-bottom-zero">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="section-title with-p">
                        <span>Calendar</span>
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 course-single mb20">
                    <!-- 1 -->
                    <div class="themeioan_event">
                        <article><!-- single event start -->
                            <div class="event-photo">
                                <a href="https://acsindiaias.com/acs_seminar"><img src="{{asset('comimages/head/1.png')}}" alt=""></a>
                            </div>
                        </article><!-- single event end-->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 course-single mb20">
                    <!-- 1 -->
                    <div class="themeioan_event">
                        <article><!-- single event start -->
                            <div class="event-photo">
                                <a href="https://acsindiaias.com/acs_webinar"><img src="{{asset('comimages/head/webi.png')}}" alt=""></a>
                            </div>
                        </article><!-- single event end-->
                    </div>
                </div>
            </div>
            <!-- .row end -->
        </div>
    </div>
	</section>

	<section>
		<div style="background-color: #345c72;">
			<div class="row justify-content-center text-center text-white bg-dark">
				<div class="col-lg-8">
					<div class="section-title with-p mb-0 p-4">
						<h2 class="mb-0">VISIT OUR INSTITUTE</h2>
					</div>
				</div>
			</div>
			<div class="row pl-4 pr-4">
			    <div class="col-lg-6 col-sm-12">
			        <div>
				<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.4851596283424!2d94.91970161425219!3d27.48528324182426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37409869cb35768d%3A0x491ce8fdcae8360a!2sAcademy%20Of%20Civil%20Services!5e0!3m2!1sen!2sin!4v1641360136814!5m2!1sen!2sin" width="900" height="400" style="border:2px solid black;" allowfullscreen="" loading="lazy"></iframe></p>
			</div>
			    </div>
			    <div class="col-lg-6 col-sm-12">
			        <div>
				<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14323.616872684346!2d91.77054733037403!3d26.167248685267065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a598a126db899%3A0x33606f5c614c8f89!2sAcademy%20of%20Civil%20Services%2CGuwahati!5e0!3m2!1sen!2sin!4v1660107183985!5m2!1sen!2sin" width="900" height="400" style="border:2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			    </div>
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
							    <h4 class="text-center underline" style="padding-top: 15px; padding-left: 40px; color: #fff;"><u>DIBRUGARH CENTER</u></h4>
								<h4 style="padding-top: 15px; padding-left: 40px; color: #fff;">NALIAPOOL,DIBRUGARH</h4>
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
							    <h4 class="text-center underline" style="padding-top: 15px; padding-left: 40px; color: #fff;"><u>GUWAHATI CENTER</u></h4>
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
				<div class="row justify-content-center text-center text-white bg-dark" >
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
						<img src="{{asset('comimages/help1.webp')}}" style="border-radius: 35px;" alt="Buy this Course">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Feedback form-->
	<section id="con" style="background-image: url({{asset('comimages/feed.webp')}});">
		<div id="contact" class="wrap-bg pt-0">
			<div class="container-fluid">
				<div class="row justify-content-center text-center text-white bg-dark" >
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
						<img src="{{asset('comimages/feedback.webp')}}" style="border-radius: 35px;" alt="Buy this Course">
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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-235408727-1"></script>
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

@endsection