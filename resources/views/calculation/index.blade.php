@extends('layouts.main')
@section('title')
    Marks Calculator - Academy of Civil Services
@endsection
@section('links')
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('comimages/gbar.webp')}}" type="image/x-icon">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Slick  -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
@endsection
@section('styles')
    <style>
    .whatsapp_float{
            position: fixed;
            bottom:40px;
            right:20px;
            z-index: 1000;
        }
        
        @media only screen and (max-width: 1920px) {
            .img-style {
                background: url({{asset('comimages/apsc_web.png')}}) no-repeat;
                background-size: cover;
                height: 80vh;
            }
        }
        
        @media screen and (max-width: 426px) {
            .img-style {
                background-size: cover;
                height: 80vh;
            }

        .course-img {
            width: 100%;
            max-height: 500px;

        }

        /*.course-width {*/
        /*    width: 80%;*/
        /*    margin: 0 auto 0 auto;*/
        /*}*/

        .discount {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            color: #ff9933;
            font-weight: bold;
            font-size: 40px;
        }

        .course-end {
            background-color: #ff9933;
            border-radius: 10px;
        }

        .mobile {
            display: inline-flex;
            justify-content: flex-end;
            padding-top: 40px;
        }

        @media (max-width: 576px) {
            .mobile {
                justify-content: center;
            !important;
                padding-top: 0;
                padding-bottom: 30px;

            }
        }

        .buy-btn {
            background-color: white;
            color: #ff9933;
        !important;
        }

        .txt-color {
            color: #ff9933;
        !important;
        }

        .card:hover {
            box-shadow: 0px 2px 4px 10px #064b70;
        }
        
        .whatsapp_float{
	position: fixed;
	bottom:100px;
	right:20px;
	z-index: 1000;
	}
    </style>
@endsection
@section('content')

    <!-- header area start -->
    <header id="header" class="transparent-header">
        <!-- #navigation start -->
    
    <!-- #navigation end -->
    </header>
    <!-- end header area -->
    <main>
        
        <div class="whatsapp_float">
		<a href="https://wa.me/919085268769" target="_blank"><img src="{{asset('comimages/whatsapp.png')}}" width="80px" class="whatsapp_float_btn"/></a>
	</div>
	<!--header content area start  position-center-->

	<div id="#offline mt-5">
		<!-- Slider Section Start -->
		<div>
			<div class="">
			    <div class=""  >
				    <a href="https://acsindiaias.com/testseriesquizroll">
				        <img src="{{asset('comimages/apsc_web1.png')}}" class="d-block w-100 img-style" alt="...">
				    </a>
				</div>
			</div>
		</div>
		<!-- Slider Section End -->
	</div>
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

        
        <!-- breadcrumb banner content area start -->
        <!--<div class="lernen_banner bg-courses">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="lernen_banner_title">-->
        <!--                <h1>MARKS CALCULATOR</h1>-->
        <!--                <div class="lernen_breadcrumb">-->
        <!--                    <div class="breadcrumbs">-->
        <!--                        <span class="first-item">-->
								<!--	<a href="/">Homepage</a></span>-->
        <!--                        <span class="separator">&gt;</span>-->
        <!--                        <span class="last-item">MARKS CALCULATOR</span>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- end breadcrumb banner content area start -->
        <!--<div class="row justify-content-center">-->
        <!--    <section class="container  rounded border mt-5 m-3 p-3 mb-5 bg-primary">-->
        <!--        <form action="{{route('calculation.store')}}" method="POST">-->
        <!--            @csrf-->
        <!--            <div class="row p-3">-->
        <!--                <div class="col-md-6 col-sm-12">-->
        <!--                    <div class="form-group font-weight-bold">-->
        <!--                        <h3 class="text-white">NAME :</h3>-->
                                <!--<label for="name" class="text-white">Name:</label>-->
        <!--                        <input id="name" name="name" required type="text" style="border-radius: 20px;"-->
        <!--                               class="form-control">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-md-6 col-sm-12">-->
        <!--                    <div class="form-group font-weight-bold">-->
                                <!--<label for="email">Email:</label>-->
        <!--                        <h3 class="text-white">Email Address :</h3>-->
        <!--                        <input name="email" id="email" required type="email" style="border-radius: 20px;"-->
        <!--                               class="form-control">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-md-6 col-sm-12">-->
        <!--                    <div class="form-group font-weight-bold">-->
                                <!--<label for="phone">Phone:</label>-->
        <!--                        <h3 class="text-white">Phone Number :</h3>-->
        <!--                        <input name="phone" id="phone" required type="text" style="border-radius: 20px;"-->
        <!--                               class="form-control">-->
        <!--                    </div>-->

        <!--                </div>-->
        <!--                <div class="col-md-6 col-sm-12">-->
        <!--                    <div class="form-group font-weight-bold">-->
                                <!--<label for="phone">Phone:</label>-->
        <!--                        <h3 class="text-white">APSC Roll Number :</h3>-->
        <!--                        <input name="roll_number" id="roll_number" required type="text" style="border-radius: 20px;"-->
        <!--                               class="form-control">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-md-6 col-sm-12">-->
        <!--                    <div class="form-group font-weight-bold">-->
                                <!--<label for="acs">Are you are student of ACS?:</label>-->
        <!--                        <h3 class="text-white">Are you student of ACS ?</h3>-->
        <!--                        <select required class="ml-3" name="acs_student" id="paper">-->
        <!--                            <option value="" selected>Select One</option>-->
        <!--                            <option value="Yes">Yes</option>-->
        <!--                            <option value="No">No</option>-->
        <!--                        </select>-->
        <!--                    </div>-->
        <!--                </div>-->

        <!--                <div class="col-md-6 col-sm-12">-->
        <!--                    <div class="form-group font-weight-bold">-->
                                <!--<label for="paper">PAPER:</label>-->
        <!--                        <h3 class="text-white">SELECT PAPER :</h3>-->
        <!--                        <select required class="ml-3" name="paper" id="paper">-->
        <!--                            <option value="" selected>Select One</option>-->
        <!--                            <option value="Paper-I">Paper-I</option>-->
        <!--                            <option value="Paper-II">Paper-II</option>-->
        <!--                        </select>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-md-6 col-sm-12">-->
        <!--                    <div class="form-group font-weight-bold">-->
                                <!--<label for="correct_ans">Total Correct Answers:</label>-->
        <!--                        <h3 class="text-white">Total Correct Answers :</h3>-->
        <!--                        <input name="correct_ans" id="correct_ans" required type="number" style="border-radius: 20px;"-->
        <!--                               class="form-control">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-md-6 col-sm-12">-->
        <!--                    <div class="form-group font-weight-bold">-->
                                <!--<label for="wrong_ans">Total Wrong Answers::</label>-->
        <!--                        <h3 class="text-white">Total Wrong Answers :</h3>-->
        <!--                        <input name="wrong_ans" id="wrong_ans" required type="number" style="border-radius: 20px;"-->
        <!--                               class="form-control">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-12 text-center mt-3">-->
        <!--                    <button class="btn button text-white ml-4 " style="background: #fb770c"-->
        <!--                            type="submit">Calculate-->
        <!--                    </button>-->
        <!--                </div>-->

        <!--            </div>-->
        <!--        </form>-->
        <!--    </section>-->
        <!--</div>-->


    </main>
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
@endsection
