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
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('css/hcss/images/fav.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/animate.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/owl.carousel.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/slick.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/off-canvas.css') }}">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/linea-fonts.css') }}">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/flaticon.css') }}">
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

        @media screen and (max-width: 512px) {
            .custom-slider {
                height: 330px;
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
            background: url('{{ asset('comimages/apsc/center.png') }}');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
            min-height: 615px;

        }
    </style>
@endsection
@section('content')
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ $message }}',
                showConfirmButton: true,
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
        <div style="background-color:#134982">
            <div class="row container mx-auto py-5">
                <div class="col-lg-6 text-center py-5">
                    <div>
                        <h3 class="text-white mobile-center text-center">Countdown for APSC EXAM 2023</h3>
                        <h2 id="demo" class="count mobile-center text-center" style="color:#e08207;"></h2>
                    </div>
                    <div>
                        <h2 class="text-white text-center"> 90 Days Booster Course</h2>
                        <h2 class="text-white text-center"> Get The First 20 Days For Free</h2>
                        <h3 class="text-center" style="color:#e08207;">For More Deatils: 9864354984</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="{{ route('apsc.exam.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="formGroupExampleInput" class="text-white">Enter Your Name</label>
                            <input required type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Your Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2" class="text-white">Enter Your Email</label>
                            <input required type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Your Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2" class="text-white">Enter Your Phone Number</label>
                            <input required type="number" class="form-control" id="formGroupExampleInput2"
                                placeholder="Number" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2" class="text-white">Enter Your Whatsapp Number</label>
                            <input required type="number" class="form-control" id="formGroupExampleInput2"
                                placeholder="Number" name="whatsAppNo">
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="class" id="inlineRadio1"
                                value="Online Class" onchange="changeName()">
                            <label class="form-check-label text-white" for="inlineRadio1">Online Class</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input required class="form-check-input" type="radio" name="class" id="inlineRadio2"
                                value="Offline Class" onchange="changeName()">
                            <label class="form-check-label text-white" for="inlineRadio2">Offline Class</label>
                        </div>

                        <div id="place" class="pt-2 pb-2">
                            <div class="form-check form-check-inline">
                                <input  class="form-check-input" type="radio" name="place" id="inlineRadio3"
                                    value="Dibrugarh Branch">
                                <label class="form-check-label text-white" for="inlineRadio3">Dibrugarh Branch</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input  class="form-check-input" type="radio" name="place" id="inlineRadio4"
                                    value="Guwahati Branch">
                                <label class="form-check-label text-white" for="inlineRadio4">Guwahati Branch</label>
                            </div>
                        </div>
                        
                        <div class="input-group mb-3 mt-3">
                            <label class="pr-3 text-white">Upload Profile Photo</label>
                            <div class="custom-file">
                                <input required type="file" class="form-control" name="profile">
                            </div>
                        </div>
                        <div>
                            <button style=" background-color: #F68C1F" type="submit" class="mt-4 btn text-center">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <!-- Modal -->
@endsection
@section('footer')
    @include('partials.footer')
@endsection
@section('scripts')
    <script src="{{ asset('js/hjs/modernizr-2.8.3.min.js') }}"></script>
    <script>
        changeName()

        function changeName() {
            if (document.getElementById('inlineRadio2').checked) {
                document.getElementById('place').style.display = 'block';
            } else {
                document.getElementById('place').style.display = 'none';
            }
        }
    </script>
    <!-- Google -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Mar 26, 2023 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
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
    <script src="{{ asset('js/hjs/waypoints.min.js') }}"></script>
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
    <script src='{{ asset('js/jquery-3.4.1.min.js') }}'></script>
    <script src='{{ asset('js/main.js') }}'></script>
    <script src='{{ asset('js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('js/slick.min.js') }}'></script>
    <script src='{{ asset('js/jquery.fancybox.pack.js') }}'></script>
    <script src='{{ asset('js/jquery.magnific-popup.min.js') }}'></script>
    <script src='{{ asset('js/waypoints.min.js') }}'></script>
    <script src='{{ asset('js/jquery.counterup.min.js') }}'></script>
@endsection
