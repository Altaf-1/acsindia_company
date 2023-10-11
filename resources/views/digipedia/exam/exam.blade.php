<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas Basic -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>All India IAS Mock Tets 2022</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Slick  -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <!-- jQuery Fancybox  -->
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <script src="{{asset('js/sweetalert2.min.js')}}"></script>

    <style>
        /* {{--for the large screen--}} */
        @media only screen and (max-width: 1920px) {
            .bg-home-ome1 {
                background: url("{{asset('comimages/headimg.png')}}") no-repeat center;
                background-size: cover;
            }
            .header-area{
            margin-top: 50px;}
        }

        @media only screen and (max-width: 1044px) {
            .bg-home-ome1 {
                background: url("{{asset('comimages/headimg.png')}}") no-repeat;
            }
            .header-area{
            margin-top: 50px;}
        }

        .count {
            text-align: left;
            margin-top: 0px;
            color: red;

        }

        @media screen and (max-width: 426px) {
            .bg-home-ome1 {
                background: url("{{asset('comimages/mobile-img.png')}}") no-repeat;
                background-size: 100% 100%;
            }

            .mobile-center {
                text-align: center !important;
            }
        }




        .animated-button1 {
            background: linear-gradient(-30deg, #3d0b0b 50%, #2b0808 50%);
            padding: 20px 40px;
            margin: 12px;
            display: inline-block;
            -webkit-transform: translate(0%, 0%);
            transform: translate(0%, 0%);
            overflow: hidden;
            color: #f7d4d4;
            font-size: 20px;
            letter-spacing: 2.5px;
            text-align: center;
            text-transform: uppercase;
            text-decoration: none;
            -webkit-box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
        }

        .animated-button1::before {
            content: '';
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background-color: #ad8585;
            opacity: 0;
            -webkit-transition: .2s opacity ease-in-out;
            transition: .2s opacity ease-in-out;
        }

        .animated-button1:hover::before {
            opacity: 0.2;
        }

        .animated-button1 span {
            position: absolute;
        }

        .animated-button1 span:nth-child(1) {
            top: 0px;
            left: 0px;
            width: 100%;
            height: 2px;
            background: -webkit-gradient(linear, right top, left top, from(rgba(43, 8, 8, 0)), to(#d92626));
            background: linear-gradient(to left, rgba(43, 8, 8, 0), #d92626);
            -webkit-animation: 2s animateTop linear infinite;
            animation: 2s animateTop linear infinite;
        }

        @keyframes animateTop {
            0% {
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }

            100% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }

        .animated-button1 span:nth-child(2) {
            top: 0px;
            right: 0px;
            height: 100%;
            width: 2px;
            background: -webkit-gradient(linear, left bottom, left top, from(rgba(43, 8, 8, 0)), to(#d92626));
            background: linear-gradient(to top, rgba(43, 8, 8, 0), #d92626);
            -webkit-animation: 2s animateRight linear -1s infinite;
            animation: 2s animateRight linear -1s infinite;
        }

        @keyframes animateRight {
            0% {
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }

            100% {
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }

        .animated-button1 span:nth-child(3) {
            bottom: 0px;
            left: 0px;
            width: 100%;
            height: 2px;
            background: -webkit-gradient(linear, left top, right top, from(rgba(43, 8, 8, 0)), to(#d92626));
            background: linear-gradient(to right, rgba(43, 8, 8, 0), #d92626);
            -webkit-animation: 2s animateBottom linear infinite;
            animation: 2s animateBottom linear infinite;
        }

        @keyframes animateBottom {
            0% {
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }

            100% {
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
        }

        .animated-button1 span:nth-child(4) {
            top: 0px;
            left: 0px;
            height: 100%;
            width: 2px;
            background: -webkit-gradient(linear, left top, left bottom, from(rgba(43, 8, 8, 0)), to(#d92626));
            background: linear-gradient(to bottom, rgba(43, 8, 8, 0), #d92626);
            -webkit-animation: 2s animateLeft linear -1s infinite;
            animation: 2s animateLeft linear -1s infinite;
        }

        @keyframes animateLeft {
            0% {
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }

            100% {
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }
        }

        .but-reg {
            padding: 15px 25px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #0b852e;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .but-reg:hover {
            background-color: #3e8e41
        }

        .but-reg:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        .info-button {
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px #888888;
            border-radius: 35px;
            color: #fff;
            font-size: 24px;
            background-color: #d64161;
        }

        hr {

            background-color: #fff;
        }

        .label-head {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    @if ($message = Session::get('success'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '{{$message}}',
            showConfirmButton: true,
        })
    </script>
    @endif
    <main>
        <!-- header content area start -->
        <div class=" header-content bg-home-ome1" role="banner">
            <!-- .container -->
            <div class="container">
                <!-- .row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 header-area">
                        <div class="header-area-inner">
                            <!-- single content header -->
                            <div><span class="subtitle ">Let's Start Your <span class="base-color">Dream </span>Journey</span></div>
                            <h1 class="title">Academy of Civil Services</h1>
                            <div><span class="subtitle font-weight-bold"><span class="text-warning">All India IAS Mock Test 2022</span></span></div>
                            <a href="#" class="animated-button1">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Get 100% Scholarship
                            </a>
                            <div style="margin-top: 30px; color: white;">
                                <a href="https://forms.gle/bhEDp1bWM4b4eyX1A" class="but-reg">Click Here To Enter The Exam</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- end header content area start -->

        <!-- features area start -->
        <div id="features" class="wrap-bg">
            <!-- .container -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- 1 -->
                        <div class=" text-center">
                            <!-- single features -->
                            <div style="font-size: 25px ; color: #fff; border: 1px solid; padding: 10px; border-radius: 35px; background-color: #5b9aa0">
                                <!-- uses solid style -->
                                <h2 class="text-bold text-white">DATE</h2>
                                <hr>
                                <h3 class="text-white mt-2">2nd January 2022</h3>
                            </div>
                        </div><!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <!-- 2 -->
                        <div style="font-size: 25px ; color: #fff; border: 1px solid; padding: 10px; border-radius: 35px; background-color: #5b9aa0">
                            <!-- uses solid style -->
                            <h2 class="text-bold text-white text-center">TIME</h2>
                            <hr>
                            <h3 class="text-white mt-2 text-center">11 am (1 Hour Exam )</h3>
                        </div><!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 ">
                        <!-- 3 -->
                        <div style="font-size: 25px ; color: #fff; border: 1px solid; padding: 10px; border-radius: 35px; background-color: #5b9aa0">
                            <!-- uses solid style -->
                            <h2 class="text-bold text-white text-center">MODE</h2>
                            <hr>
                            <h3 class="text-white mt-2 text-center">ONLINE</h3>
                        </div><!-- end single features -->
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- features area end -->

        <!-- why-us area start -->


        <div class="mt-4" id="why-us" style="background-color: #15BBB6;">
            <div><h2 class="text-white text-center" style="background-color: #d1201d;">Scholarship For The Winners</h2></div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-5 ">
                    <img src="{{asset('comimages/winner.gif')}}" style="width: 700px; height: 600px;" alt="Buy this Course">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 col-lg-7 wrap-padding">
                    <div class="info-button text-center">
                    <strong>Winners = Above 35% Cut Off</strong>
                </div>
                <div class="info-button text-center mt-4" style="background-color: #c9cf25;">
                    <strong>AWARDS</strong>
                </div>
                <div class="info-button text-center mt-4">
                    <strong>Get Free IAS 2022 REVISE Course</strong>
                </div>
                <div class="mt-4">
                    <img src="{{asset('comimages/course.jpg')}}" style="width: 500px; height: 300px; margin-left:20px;" alt="Buy this Course">
                </div>
                </div>
            </div>
        </div>
        <!-- why-us area end -->


        <!-- contact area start -->
        <!--<div id="contact" class="wrap-bg wrap-bg bg-light">-->
        <!--    <div class="container">-->
        <!--        <div class="row justify-content-center text-center">-->
        <!--            <div class="col-lg-12 col-md-12 col-sm-12">-->
        <!--                <div class="section-title with-p bg-dark text-white">-->
        <!--                    <h2>REGISTRATION</h2>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="row bg-light">-->
        <!--            <div class="col-md-6 col-lg-6">-->
        <!--                <form method="POST" action="{{route('ias.mock.test.store')}}">-->
        <!--                    @csrf-->
        <!--                    @method('POST')-->
                            <!-- Change Placeholder and Title -->
        <!--                    <div>-->
        <!--                        <input style="height: 55px; border-radius: 35px;" class="input-text required-field @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" title="Your Full Name" />-->
        <!--                        @error('name')-->
        <!--                        <span class="invalid-feedback" role="alert">-->
        <!--                            <strong>{{ $message }}</strong>-->
        <!--                        </span>-->
        <!--                        @enderror-->
        <!--                    </div>-->
        <!--                    <div>-->
        <!--                        <input style="height: 55px; border-radius: 35px;" class="input-text required-field email-field @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" title="Your Email" />-->
        <!--                        @error('email')-->
        <!--                        <span class="invalid-feedback" role="alert">-->
        <!--                            <strong>{{ $message }}</strong>-->
        <!--                        </span>-->
        <!--                        @enderror-->
        <!--                    </div>-->
        <!--                    <div>-->
        <!--                        <input style="height: 55px; border-radius: 35px;" class="input-text required-field @error('phone') is-invalid @enderror" type="number" name="phone" placeholder="Phone Number" title="Your Phone Number" />-->
        <!--                        @error('phone')-->
        <!--                        <span class="invalid-feedback" role="alert">-->
        <!--                            <strong>{{ $message }}</strong>-->
        <!--                        </span>-->
        <!--                        @enderror-->
        <!--                    </div>-->
        <!--                    <div>-->
        <!--                        <input style="height: 55px; border-radius: 35px;" class="input-text required-field @error('phone') is-invalid @enderror" type="text" name="state" placeholder="State" title="Your State" />-->
        <!--                        @error('phone')-->
        <!--                        <span class="invalid-feedback" role="alert">-->
        <!--                            <strong>{{ $message }}</strong>-->
        <!--                        </span>-->
        <!--                        @enderror-->
        <!--                    </div>-->
        <!--                    <div>-->
        <!--                        <h5 class="mt-3">Have you appeared in the IAS Exam earlier? </h5>-->
        <!--                        <label class="radio-inline ml-5 @error('appeared_IAS_Exam_earlier') is-invalid @enderror">-->
        <!--                            <input type="radio" name="appeared_IAS_Exam_earlier" value="yes">YES</label>-->
        <!--                        <label class="radio-inline ml-5">-->
        <!--                            <input type="radio" name="appeared_IAS_Exam_earlier" value="no">NO</label>-->

        <!--                        @error('appeared_IAS_Exam_earlier')-->
        <!--                        <span class="invalid-feedback" role="alert">-->
        <!--                            <strong>{{ $message }}</strong>-->
        <!--                        </span>-->
        <!--                        @enderror-->
        <!--                    </div>-->

        <!--                    <div>-->
        <!--                        <h5 class="mt-3">If yes, have you cleared the prelims earlier?</h5>-->
        <!--                        <label class="radio-inline ml-5 @error('cleared_prelims_earlier') is-invalid @enderror">-->
        <!--                            <input type="radio" name="cleared_prelims_earlier" value="yes">YES</label>-->
        <!--                        <label class="radio-inline ml-5">-->
        <!--                            <input type="radio" name="cleared_prelims_earlier" value="no">NO</label>-->
        <!--                        @error('cleared_prelims_earlier')-->
        <!--                        <span class="invalid-feedback" role="alert">-->
        <!--                            <strong>{{ $message }}</strong>-->
        <!--                        </span>-->
        <!--                        @enderror-->
        <!--                    </div>-->
                            <!--<button type="submit" class="color-two button disable">Register</button>-->
        <!--                </form>-->
        <!--            </div>-->
        <!--            <div class="col-md-6 col-lg-6">-->
        <!--                <img src="{{asset('comimages/reg.gif')}}" style="margin-top: 0px;" alt="Buy this Course">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- contact area end -->
    </main>


    <!-- JavaScript File -->
    <!-- jQuery -->
    <script src='{{asset("js/jquery-3.4.1.min.js")}}'></script>
    <!-- Main -->
    <script src='{{asset("js/main.js")}}'></script>
    <!-- Bootstrap -->
    <script src='{{asset("js/bootstrap.min.js")}}'></script>
    <!-- Slick -->
    <script src='{{asset("js/slick.min.js")}}'></script>
    <!-- Fancybox -->
    <script src='{{asset("js/jquery.fancybox.pack.js")}}'></script>
    <!-- Magnific Popup core JS file -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Waypoints -->
    <script src='{{asset("js/waypoints.min.js")}}'></script>
    <!-- Counterup -->
    <script src='{{asset("js/jquery.counterup.min.js")}}'></script>

</body>

</html>