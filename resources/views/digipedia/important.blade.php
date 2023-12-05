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
    <!-- why-us area start -->
    <section>
        <div class="rs-faq-part style1 md-pt-70 md-pb-70 mt-2">
            <div class="container-fluid m-2">
                <div class="row">
                    <div class="col-lg-6 padding-0">
                        <div>
                            <img src="comimages/2023/result.jpeg" style="height:550px; width:800px"
                                class="img-fluid w-60" alt="Responsive image">
                        </div>
                    </div>
                    <div class="col-lg-6 padding-0 about-intro">
                        <div class="main-part">
                            <div class="row">
                                <div class="col-lg-6 pt-5 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:110px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/d5.png')}}">
                                    <!--<a href="https://acsindiaias.com/offline"><h3 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2">Offline Courses</h3></i></a>-->
                                    <a href="{{asset('/Probable_Question')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">Probable
                                        Question</a>
                                </div>
                                <div class="col-lg-6 pt-5 col-sm-6 col-md-6 text-center justify-content-center">
                                    <img class="text-danger p-1 mb-4"
                                        style="width:110px; boder: 1px solid black; border-radius: 20px;"
                                        src="{{asset('comimages/icons/d2.png')}}">
                                    <!--<a href="{{route('dailynewsanalyse.index')}}"><h4 style="background-color: #134982; font-family: 'Righteous';" class="d-flex flex-column btn text-white p-2">Daily News</h4></i></a>-->
                                    <a href="{{asset('/apsc_pyq')}}"
                                        class="shadow_1 d-flex flex-column text-white p-2 rounded-pill mb-2"
                                        style="background-color: #134982; font-family: 'Righteous';">Previous Year
                                        Question Papers</a>
                                </div>
                                <div class="col-lg-6 pt-5 col-sm-6 col-md-6 bg-info text-center justify-content-center">
                                    <h5 class="text-center text-white">For More Information: 6000505707</h5>
                                    <div class="dropup-center dropup mt-3">
                                        <button class="btn dropdown-toggle text-white"
                                            style="background-color: #e52e06; font-family: 'Righteous';" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            CRASH COURSE PRELIMS 2024
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="https://acsindiaias.com/apsc/course/54">Online
                                                    CLASS</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="https://acsindiaias.com/apsc/course/55">Offline
                                                    CLASS</a></li>
                                        </ul>
                                    </div>
                                    <a href="acsindiaias.com" class="btn btn-primary text-white rounded mt-3">Visit main
                                        Website</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
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