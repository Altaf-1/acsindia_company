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
	
	.card-img1{
		border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 100%;
  height: 200px;
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
		<div class="row m-1">
			<div class="col-lg-8">
				<div id="carouselExampleFade">
					<div class="carousel-inner shadow-lg p-3 bg-body rounded">
						<div class="carousel-item active">
							<img src="{{asset('comimages/head/ban2.webp')}}" class="d-block w-100" alt="...">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-12 p-2">
						<div class="shadow-lg bg-body rounded">
							<a href="https://acsindiaias.com/upsc_demo"><img src="{{asset('comimages/haedi/1.png')}}" class="card-img1" alt="..."></a>
						</div>
					</div>
					<div class="col-lg-12 p-2">
						<div class="shadow-lg bg-body rounded"><a href="https://acsindiaias.com/apsc">
						    <img src="{{asset('comimages/haedi/2.png')}}" class="card-img1" alt="...">
						</a>
							
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- Slider Section End -->
	</div>
	</div>

	<!---Course -->
			<div class="container-fluid pt-3 mb-3 justify-content-center " style="background-color:#134982">
			<div class="row" style="background-color:#134982">
			<div class="container-fluid ml-5 mr-5">
                    <div class="row align-items-center">
                        <div class="col-lg-5 lg-pr-0 md-mb-50">
                            <div class="choose-us-part">
                                <div class="sec-title wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <h2 class="title mb-20 text-white">Why Choose Us</h2>
                                    <h3 class="mt-4 text-white">Aspirations of Academy of Civil Services move hand in hand with the Indian Civil Services Aspirants. Success of each aspirant is our priority. We believe in pure ethical form of service, with zero tolerance in quality learning at an affordable price for each fellow Indian.</h3>

                                </div>
                                <div class="facilities-part mt-5">
                                    <div class="single-facility wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="icon-part one">
                                            <img class="shape-img bg-light" style="width:50px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/icons/d1.png')}}" alt="Shape Image"><spam class="display-6 ml-4 text-white">Qualified Teachers</spam>
                                        </div>
                                    </div>
                                    <div class="single-facility wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="icon-part one mt-5">
                                            <img class="shape-img bg-light" style="width:50px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/icons/d4.png')}}" alt="Shape Image"><spam class="display-6 ml-4 text-white">Online & Offline Classes</spam>
                                        </div>
                                    </div>
                                    <div class="single-facility wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="icon-part one mt-5 mb-5">
                                            <img class="shape-img bg-light" style="width:50px; boder: 1px solid black; border-radius: 30%;" src="{{asset('comimages/icons/cr.png')}}" alt="Shape Image"><spam class="display-6 ml-4 text-white">High Quality Materials</spam>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 lg-pl-0">
                            <div class="free-course-contact">
                                <div id="form-messages"><h4 class="text-white text-center">Book Your Free Class</h4></div>
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
                                        <button type="submit" class="btn text-white display-6 p-4" style="background-color: #F68C1F">Register</button>
                                    </div>
						</form>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			</div>


	
	<!--social Icons -->
	<div class="container mb-5 pt-3 pb-3" style="background-color: #fffff">
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


