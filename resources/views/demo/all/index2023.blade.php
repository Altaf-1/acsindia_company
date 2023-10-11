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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Bootstrap v4.4.1 css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
	
	.fa-check-circle {
	    color: red;
	    margin-top: 10px;
	}
	
	.fa-text{
	    color: black;
	    font-size: 20px;
	    padding: 20px;
	    margin-top: 10px;
	}
	
	.rs-faq-part.style1 .img-part {
  background: url({{asset('comimages/apsc/center.png')}});
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
	<!-- #navigation start class="transparent-header /head/555.png onclick="modal()""-->
	@include('partials.navbar')
	<!-- #navigation end -->
</header>
<main>

	<div class="whatsapp_float">
		<a href="https://wa.me/919085268769" target="_blank"><img src="{{asset('comimages/whatsapp.png')}}" width="80px" class="whatsapp_float_btn"/></a>
	</div>
	<!--header content area start  position-center-->

	<div id="#offline mt-5">
		<!-- Slider Section Start -->
		<div id="carouselExampleIndicators">
			<div class="carousel-inner">
			    <div class="carousel-item active custom-slider"  >
			        <!--onclick="modal()"-->
				    <a>
				        <img class="d-block w-100 h-100" src="{{asset('comimages/seminar/seminar.jpg')}}" alt="First slide">
				    </a>
				</div>
			</div>
		</div>
		<!-- Slider Section End -->
	</div>
	</div>

	<!---Course -->
			<div class="container-fluid pt-3 mb-3 justify-content-center " style="background-color:#134982">
			<div class="row" style="background-color:#134982">
			<div class="col-lg-3 pt-2 pb-2 " >
			    <!--<h3 class="text-white">VISION</h3>-->
			<div class="d-flex flex-column justify-content-between align-items-center">
			    <!--<h4 class="text-white d-flex text-justify justify-content-center align-items-center">Aspirations of Academy of Civil Services move hand in hand with the Indian Civil Services Aspirants. Success of each aspirant is our priority. We believe in pure ethical form of service, with zero tolerance in quality learning at an affordable price for each fellow Indian.</h4>-->
			    <img style="width:90px;" src="{{asset('comimages/new1.gif')}}">
			    <h4 class="text-white mt-5">UPSC PRELIMS BOOSTER TEST SERIES</h4>
			    <!--<h3 class="text-white font-weight-bold">FREE REVISION KIT</h3>-->
			    <a href="https://acsindiaias.com/recorded/course/upsc-prelims-booster-test-series" style="background-color:#F68C1F" class="btn text-white p-3 mt-3">View Course Details</a>
			    {{-- // free master class --}}
        
			</div>
			</div>
			<div class="col-lg-3 justify-content-center text-center bg-light pt-4 pb-2">
			<img class="text-danger p-1 mb-4" style="width:110px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/icons/cr.png')}}">
			<h2 style="color: #134982">UPSC ONLINE</h2>
									<a href="{{route('course.index')}}"><h4 style="color: #F68C1F">Online Upsc Courses.</h4></i></a>
									<a href="{{route('course.index')}}" style="background-color:#F68C1F" class="btn text-white p-3 mt-3">View Details</a>
			</div>
			<div class="col-lg-3 text-center bg-light pt-4 pb-2">
			<img class="text-danger p-1 mb-4" style="width:110px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/icons/cr.png')}}">
			<h2 style="color: #134982">APSC ONLINE</h2>
									<a href="{{route('apsc.courses.index')}}"><h4 style="color: #F68C1F">Online Apsc Courses.</h4></i></a>
									<a href="{{route('apsc.courses.index')}}" style="background-color:#F68C1F" class="btn text-white p-3 mt-3">View Details</a>
			</div>
			<div class="col-lg-3 text-center bg-light pt-4 pb-2">
			<img class="text-danger p-1 mb-4" style="width:110px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/icons/cr.png')}}">
			<h2 style="color: #134982">RECORDED COURSE</h2>
									<a href="/acs_recorded_classes"><h4 style="color: #F68C1F">Upsc/Apsc RECORDED Courses.</h4></i></a>
									<a href="/acs_recorded_classes" style="background-color:#F68C1F" class="btn text-white p-3">View Details</a>
									<!--<a href="/offline" style="background-color:#F68C1F" class="btn text-white p-3">View Details</a>-->
			</div>
			</div>
			</div>

	<!-- About Section Start -->
            <div id="rs-about" class="rs-about style1 pb-10 md-pb-10" style="margin-top:10px; !important">
                <div class="container">
                    <div class="row">
                            <div class="col-lg-4 order-last">
                            <div class="notice-bord style1">
                                <h4 class="title" style="background-color: #134982">Notifications</h4>
                                <ul>
                                    
                                    <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                        <div class="date"><span>9</span>Jan</div>
                                        <div class="desc"><a href="#ourcourses">New IAS BOOSTER COURSE (D) launched (12 MONTHS).</a></div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                        <div class="date"><span>6</span>Feb</div>
                                        <div class="desc"><a href="https://www.acsindiaias.com/apsc/courses?">APSC BOOSTER COURSE (C) launched (12 MONTHS).</a></div>
                                    </li>
                                    <!--<li class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">-->
                                    <!--    <div class="date"><span>16</span>Oct</div>-->
                                    <!--    <div class="desc"><a href="/acs_webinar">IAS WEBINAR</a></div>-->
                                    <!--</li>-->
                                    <li class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                        <div class="date"><span>25</span>Dec</div>
                                        <div class="desc"><a href="/acs_seminar">IAS ONLINE WEBINAR</a></div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                        <div class="date"><span>22</span>Nov</div>
                                        <div class="desc"><a href="/acs_toppers_answer">ACS TOPPERS ANSWER</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 pr-50 md-pr-15">
                            <div class="about-part">
                                <div class="sec-title mb-10">
                                    <div class="row">
									<div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
									<img class="text-danger p-1 mb-4" style="width:110px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/icons/d5.png')}}">
									<a href="/acsall"><h4 style="background-color: #134982" class="d-flex flex-column btn text-white">Acs Digipedia</h4></i></a>
									</div>
									<div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
									<img class="text-danger p-1 mb-4" style="width:110px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/icons/d2.png')}}">
									<a href="{{route('dailynewsanalyse.index')}}"><h4 style="background-color: #134982" class="d-flex flex-column btn text-white">Daily News Analysis</h4></i></a>
									</div>
									<div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
									<img class="text-danger p-1 mb-4" style="width:110px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/icons/d4.png')}}">
									<a href="{{route('current.affair.index', 'current_affair')}}"><h4 style="background-color: #134982" class="d-flex flex-column btn text-white">CURRENT AFFAIRS</h4></i></a>
									</div>
									<div class="col-lg-6 col-sm-6 col-md-6 text-center justify-content-center">
									<img class="text-danger p-1 mb-4" style="width:110px; boder: 1px solid black; border-radius: 20px;" src="{{asset('comimages/icons/d1.png')}}">
									<a href="{{route('current.affair.index', 'assam_current_affair')}}"><h4 style="background-color: #134982" class="d-flex flex-column btn text-white">APSC CURRENT AFFAIRS</h4></i></a>
									</div>
									</div>
                                </div>
                              


                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- About Section End -->
            
           <div class="rs-degree style1 modify gray-bg pt-100 pb-70 md-pt-70 md-pb-40">
		<div class="container">
			<div class="row y-middle">
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="sec-title wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
						<div class="sub-title primary" style="color: #F68C1F">We Provide</div>
						<h2 class="mb-0" style="color: #134982">Successful Plan To Crack UPSC & APSC</h2>
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
            

	<div class="m-4">
		<div class="row">
			<div  class=" col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-5 why-us-left-bg">
			    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
             <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('comimages/head/topm.png')}}" class="d-block w-100" alt="...">
                </div>
            <div class="carousel-item">
                <img src="{{asset('comimages/head/result.png')}}" class="d-block w-100" alt="...">
            </div>
            </div>
            </div>
				<!--<img style="height:550px; width:800px" target="_blank" src="{{asset('comimages/head/topm.png')}}"/></a>-->
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-7 wrap-padding">
				<div>
				    <div class=" text-center ">
				        <h2 class="text-white p-4" style="background-color: #134982">GEAR UP FOR APSC</h2>
				    </div>
					<div>
						<h4 >The course focuses on the strategic methods for all the subjects required for APSC. It also includes the CSAT paper with proper guidance along with current affairs and test series to boost up the knowledge.</h4>
						<h4 >Our Institute believes in excellence and therefore we provide Personal Mentoring in every aspect. This feature is relevant to all the three stages be it Prelims, Mains and Interview.</h4>
						<div>
						    <a href="/toppers" style="background-color: #F68C1F"  class="readon green-banner m-4">Get Insights From Our TOPPERS </a>
						<a href="/apsc" style=" background-color: #F68C1F" class="readon green-banner mt-4">VISIT APSC WEBSITE</a>
						<div class="justify-content-center container pb-3" data-aos="fade-right">
		<a href="https://drive.google.com/file/d/1ENBUdfrN-O7bxFQLwKz3ytfqQJu-VcL7/view?usp=sharing" style="background-color: #134982" class=" btn color-two button text-white">READ OUR ACS WISDOM</a>
		<form action="https://drive.google.com/file/d/1r2YteXc6JC8gEymFN_EjPR6NR-CciqIj/view?usp=sharing">
			<button type="submit" style="width:250px;">
				<span>ACS WISDOM</span>
				<div class="liquid"></div>
			</button>
		</form>
	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End APSC Section -->
	
	<!--social Icons -->
	<div class="container mb-5 pt-3 pb-3" style="background-color: #134982">
				<div class="row">
				<div class="col-lg-3" style="background-color: #134982">
				<h2 class="pt-3 pb-3 text-white text-center">Visit Our Online Channels</h2>
				<div class="row">
				<div class="col-lg-4">
				<a href="https://www.facebook.com/acs.iasindia">
<img src="{{asset("comimages/social/fb.png")}}" style="height: 60px;"/>
</a>
				</div>
				<div class="col-lg-4">
				<a href="https://www.instagram.com/academyofcivilservices/">
<img src="{{asset("comimages/social/insta.png")}}" style="height: 60px;"/>
</a>
				</div>
				<div class="col-lg-4">
				<a href="https://t.me/acsias">
<img src="{{asset("comimages/social/tel.png")}}" style="height: 60px;"/>
</a>
				</div>
				</div>
				<div class="d-grid gap-2 d-md-flex justify-content-md-center">
  <a class="btn btn-danger mt-5 text-center" href="https://www.youtube.com/channel/UCOs-olyxhFwKLyz353n5kgw">View All Videos</a>
</div>
				</div>
				<div class="col-lg-3">
				<div class="card" style="width: 18rem;">
  <img src="{{asset("comimages/social/ar.png")}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">Artificial Intelligence</h5>
    <a href="https://youtu.be/tVyNDJqndYQ" class="btn btn-danger">View</a>
  </div>
</div>
				</div>
				<div class="col-lg-3">
				<div class="card" style="width: 18rem;">
  <img src="{{asset("comimages/social/y2.png")}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">Federal System in India</h5>
    <a href="https://youtu.be/-tOVufeXdFs" class="btn btn-danger">View</a>
  </div>
</div>
				</div>
				<div class="col-lg-3">
				<div class="card" style="width: 18rem;">
  <img src="{{asset("comimages/social/ma.jpg")}}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">Story of Ponniyin Selvan</h5>
    <a href="https://youtu.be/pevfbMSBXuw" class="btn btn-danger">View</a>
  </div>
</div>
				</div>
				</div>
				</div>
			</div>
	
	<!-- End APSC Section -->
	<section id="ourteam">
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
	<div>
	
	<!-- Popular Courses Section Start -->
            <div id="Events" class="rs-latest-couses gray-bg2 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class=" container">
                    <div class="sec-title text-center mb-60 md-mb-45">
                        <div class="sub-title">Calendar</div>
                        <h2 class="title mb-0">Upcoming Events</h2>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6 mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="/acs_seminar">
                                      <img src="{{asset('comimages/head/1.png')}}" alt="images">
                                  </a>
                                </div>
                                
                                <div class="course-info mt-4">
                                    <h3 class="course-title">
                                        <a href="/acs_seminar">
                                            <h3>APSC/UPSC FREE SEMINAR</h3>
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
                                            <a href="/acs_seminar" class="btn btn-info text-white font-weight-bold mb-4">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="/acs_webinar">
                                      <img src="{{asset('comimages/head/webi.png')}}" alt="images">
                                  </a>
                                </div>
                                
                                <div class="course-info mt-4">
                                    <h3 class="course-title">
                                        <a href="/acs_webinar">
                                            <h3>APSC/UPSC FREE WEBINAR</h3>
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
                                            <a href="/acs_webinar" class="btn btn-info text-white font-weight-bold mb-4">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End -->
	
	</div>
	

	<section>
		<div style="background-color: #134982;">
			<div class="row justify-content-center text-center text-white">
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
	
	<div>
	
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
                                            <img class="shape-img" style="width:50px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/icons/d1.png')}}" alt="Shape Image">
                                        </div>
                                        <div class="text-part">
                                            <h2 >Qualified Teachers</h2>
                                            <p class="desc">We provide teachers with experience and in-depth knowledge about civil services.</p>
                                        </div>
                                    </div>
                                    <div class="single-facility wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="icon-part one">
                                            <img class="shape-img" style="width:50px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/icons/d4.png')}}" alt="Shape Image">
                                        </div>
                                        <div class="text-part">
                                            <h2 >Online & Offline Classes</h2>
                                            <p class="desc">We provide online & Offline classes at a minimal cost and at your own convenience.</p>
                                        </div>
                                    </div>
                                    <div class="single-facility wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="icon-part one">
                                            <img class="shape-img" style="width:50px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/icons/cr.png')}}" alt="Shape Image">
                                        </div>
                                        <div class="text-part">
                                            <h2 >High Quality Materials</h2>
                                            <p class="desc">We provide high content materials prepared by our own faculities.</p>
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
						<div class="form-btn submit-btn mt-30">
                                        <button type="submit" class="btn text-white" style="background-color: #F68C1F">SUBMIT QUERY</button>
                                    </div>
						</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Why Choose Us Section End -->
	</div>
	
	<!--Feedback form-->
	<section id="con" style="background-image: url({{asset('comimages/feed.webp')}});">
		<div id="contact" class="wrap-bg pt-0">
			<div class="container-fluid">
				<div class="row justify-content-center text-center text-white" style="background-color: #134982" >
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
							<button type="submit" class="btn text-white" style="background-color: #F68C1F">SUBMIT</button>
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
<!-- Google -->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<!-- jquery latest version -->
<script src="{{asset('js/hjs/jquery.min.js')}}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{asset('js/hjs/bootstrap.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
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
<script>
                                                    function modal() {
                                                        Swal.fire({
                                                            html: '<div class="row "> <div class="col-4 p-2 mb-2"><a href="https://acsindiaias.com/user/study/show/9">\n' +
                                                                '  <img src="{{asset('comimages/2023/test.jpeg')}}" width="100%" >\n' +
                                                                ' </a></div>\n' +
                                                                '<div class="col-4 p-2 mb-2"><a href="https://acsindiaias.com/user/study/show/1">\n' +
                                                                '  <img src="{{asset('comimages/study2.jpeg')}}" width="100%">\n' +
                                                                '</a></div>\n' + '<div class="col-4 p-2"><a href="https://www.acsindiaias.com/user/study/show/13">\n' +
                                                                '  <img src="{{asset('comimages/2023/current.jpeg')}}" width="100%">\n' +
                                                                '</div> </a></div>\n' ,
                                                            width: 950,
                                                        })
                                                    }
                                                </script>

@endsection


