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
<!-- Font Awesome  -->
<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script src="{{ asset('js/sweetalert2.min.js') }}"></script>

@endsection
@section('styles')
<style>
    @media only screen and (max-width: 1920px) {
        .bg-home-ome1 {
            background: url("{{ asset('comimages/head-4.png')}}") no-repeat center;
            background-size: cover;
        }
    }

    @media only screen and (max-width: 1044px) {
        .bg-home-ome1 {
            background: url("{{ asset('comimages/headimg.png')}}") no-repeat;
        }
    }

    #testimonials {
        background-image: url("{{ asset('comimages/brk1.webp')}}");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .count {
        text-align: left;
        margin-top: 0px;
        color: red;

    }

    @media screen and (max-width: 426px) {
        .bg-home-ome1 {
            background: url("{{ asset('comimages/mobile-img.png')}}") no-repeat;
            background-size: 100% 100%;
        }

        .mobile-center {
            text-align: center !important;
        }

        button {
            position: relative;
            display: block;
            text-decoration: none;
            text-transform: uppercase;
            width: 100px;
            overflow: hidden;
            border-radius: 40px;
            border: none;
            margin-left: 10px;
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
            width: 100px;
            height: 200px;
            background: #1abc9c;
            box-shadow: inset 0 0 50px rgba(0, 0, 0, .5);
            transition: .5s;
        }

        button .liquid::after,
        button .liquid::before {
            content: '';
            width: 100px;
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
    }

    marquee {
        font-size: 30px;
        font-weight: 800;
        color: #e67300;
        font-family: sans-serif;
        padding-top: 15px;
    }

    .whatsapp_float {
        position: fixed;
        bottom: 40px;
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
        background: #1abc9c;
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
</style>
@endsection
@section('content')
@if ($message = Session::get('success'))
<a id="downloadDocs" onclick="submitBtn()" download href="{{asset('pdf/APSCInterviewManual.pdf')}}"></a>
<script>
    function submitBtn() {
        document.getElementById("downloadDocs").click();
    }
    Swal.fire({
        title: '<strong>HTML <u>example</u></strong>',
        icon: 'success',
        title: ' Thank you for Registration',
        focusConfirm: false,
        confirmButtonText: 'Download Interview Brochure',
        confirmButtonColor: "#FF0000",
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            submitBtn();
        }
    })
</script>
@endif
<main>
    <div class="whatsapp_float">
        <a href="https://wa.me/917099032473" target="_blank"><img src="{{ asset('comimages/whatsapp.png') }}" width="80px" class="whatsapp_float_btn" /></a>
    </div>
    <!--header content area start  position-center-->
    <div class="header-content position-left bg-home-ome1 col-sm-12" role="banner">
        <!--.container -->
        <div class="container-fluid pl-5">
            <!--.row -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 header-area">
                    <div class="header-area-inner header-text pt-5">
                        <!--single content header -->
                        <div class="mobile-center mt-3"><span data-aos="fade-down " data-aos-delay="500" class="subtitle ">Welcome to</span></div>
                        <h1 data-aos="fade-right" class="title mobile-center"><span class="base-color ml2 bg-white">&nbsp;Academy of Civil Services&nbsp;</span></h1>
                        <h3 data-aos="fade-down" class="text-white mobile-center">Be the Best - Be the Change</h3>
                        <div class="mt-3">
                            <img src="{{ asset('comimages/new1.gif') }}" width="60" height="25">
                            <h2 class="text-white">APSC INTERVIEW TRAINING</h2>
                            <a href="#regis" style"box-shadow: 5px 10px #888888;" class="color-two btn-custom smooth-scroll">CLICK HERE FOR REGISTRATION</a>
                        </div>

                        <!--<a href="https://acsassam.com/upsc-test-series/" class=" btn color-two button text-white" target="_blank">UPSC TEST SERIES 2020</a>-->
                    </div>
                </div>
            </div>
            <!--.row end -->
        </div>
        <!--.container end -->
    </div>

    <marquee scrollamount="15">THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES
        EXAMINATION.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE
        LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
    </marquee>
    <!-- end header content area start -->
    <!-- why-us area start -->
    <div class="m-4">
        <div class="row">
            <div data-aos="fade-right" class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-5 why-us-left-bg">
                <img style="height:450px; width:800px" target="_blank" src="{{asset('comimages/about1.webp')}}" /></a>
            </div>
            <div class="col-lg-6" id="regis">
                <form action="{{route('eventdata.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf()
                    <div class="mb-3">
                        <h3>Name</h3>
                        <input required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <h3>Email Address</h3>
                        <input required name="email" type="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <h3>Phone Number</h3>
                        <input required name="phone" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <h3>City</h3>
                        <input required name="city" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <h3>Mains Application Form</h3>
                        <input required name="application_form" type="file">
                    </div>
                    <div class="mb-3">
                        <h3>Upload Profile Picture</h3>
                        <input required name="profile_img" type="file">
                    </div>
                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                </form>
            </div>

        </div>
    </div>
    @endsection
    @section('scripts')
    <script src='{{ asset('js/jquery-3.4.1.min.js') }}'></script>
    <script src='{{ asset('js/main.js') }}'></script>
    <script src='{{ asset('js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('js/slick.min.js') }}'></script>
    <script src='{{ asset('js/jquery.fancybox.pack.js') }}'></script>
    <script src='{{ asset('js/jquery.magnific-popup.min.js') }}'></script>
    <script src='{{ asset('js/waypoints.min.js') }}'></script>
    <script src='{{ asset('js/jquery.counterup.min.js') }}'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script>
        $('#exampleModalCenter').on('hide.bs.modal', () => {
            let video = $("#ytplayer").attr("src");
            $("#ytplayer").attr("src", "");
            $("#ytplayer").attr("src", video);
        })
        $('.carousel').carousel({
            interval: 3000
        })


        // Wrap every letter in a span
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