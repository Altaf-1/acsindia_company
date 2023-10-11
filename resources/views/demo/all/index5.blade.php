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
    {{--    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">--}}
    <!-- Magnific Popup core CSS file -->
    {{--    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">--}}
    
    
@endsection
@section('styles')
    <style>
        {{--for the large screen--}}
      @media only screen and (max-width: 1920px) {
            .bg-home-ome1 {
                background: url({{asset('comimages/headimg.webp')}}) no-repeat center;
                background-size: cover;
            }
        }

        @media only screen and (max-width: 1044px) {
            .bg-home-ome1 {
                background: url({{asset('comimages/headimg.webp')}}) no-repeat;
            }
        }

        #testimonials {
            background-image: url({{asset('comimages/brk1.webp')}});
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .count {
            text-align: left;
            margin-top: 0px;
            color:red;

        }
            @media screen and (max-width: 426px) {
            .bg-home-ome1 {
                background: url({{asset('comimages/demo-mobile.webp')}}) no-repeat ;
                display: inline-block;
    width: 100%;
    font-size: 0;
    line-height: 0;
    vertical-align: middle;
    background-size: 100%;
    background-position: 50% 50%;
    background-repeat: no-repeat;
            }
            .mobile-center{
                text-align:center!important;
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
            padding-top:15px;
        }
        /*div h1 h2 h3 h4 {*/
            
        /*    animation-duration: 12s;*/
        /*        }*/
        .whatsapp_float{
            position: fixed;
            bottom:40px;
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
    <header id="header" class="transparent-header">
        <!-- #navigation start -->
    <!-- #navigation end -->
    </header>

    <main>
        <div class="whatsapp_float">
            <a href="https://wa.me/917099032473" target="_blank"><img src="{{asset('comimages/whatsapp.png')}}" width="80px" class="whatsapp_float_btn"/></a>
        </div>
         <!--header content area start  position-center-->
        <div class="header-content position-left bg-home-ome1 col-sm-12" role="banner">

        </div>
        
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
 
            $('#exampleModalCenter').on('hide.bs.modal', () => {
                let video = $("#ytplayer").attr("src");
                $("#ytplayer").attr("src","");
                $("#ytplayer").attr("src",video);
            })
        $('.carousel').carousel({
            interval: 3000
        })
            

        // Wrap every letter in a span
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
// Set the date we're counting down to
var countDownDate = new Date("June 5, 2022 15:37:25").getTime();

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
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
@endsection



