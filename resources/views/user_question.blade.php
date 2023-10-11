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
                background: url({{asset('comimages/mobile-img.png')}}) no-repeat ;
                background-size: 100% 100%;
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
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: "Thank you for attending ACS Seminar. You've earned a 50% less scholarship coupon. Your coupon is: ",
                text: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif
    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif


    <main>


        <!-- User questions section start -->
        <section id="con">
            <div id="contact" class="wrap-bg pt-0" style="background-image: url({{asset('comimages/feed.webp')}});">
                <div class="container-fluid">
                    <div style="background-color:#1abc9c;" class="row justify-content-center text-center text-white">
                        <div class="col-lg-8">
                            <div class="section-title with-p mb-0 p-4">
                                <h2 class="mb-0">FEEDBACK</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row container  justify-content-center m-auto pt-5">
                        <div class="col-md-6 col-lg-6">
                            <form class="themeioan-form-contact form" method="post" action="{{route('store-user-coupon')}}">
                            @csrf
                            <!-- Change Placeholder and Title -->
                                <div>
                                    <input class="input-text required-field" type="text" name="name"
                                           placeholder="Name" required title="Your Full Name"/>
                                </div>

                                <div>
                                    <input class="input-text required-field email-field" type="email"
                                           name="email" required placeholder="Email" title="Your Email"/>
                                </div>

                                <div>
                                    <input class="input-text required-field" type="text" name="phone"
                                           placeholder="Phone number" required/>
                                </div>

                                <div>
                                    <label class="text-white">1. Are you preparing for IAS/APSC ?</label>
                                    <div class="row">
                                        <div class="col-sm-2 text-white">
                                            <label for="thought-yes">YES :</label>
                                           <input id="thought-yes" required type="radio" name="thought" value="yes" style="width: auto;">
                                        </div>
                                        <div class="col-sm-3 text-white">
                                            <label for="thought-no">NO :</label>
                                            <input type="radio" required id="thought-no"  name="thought" value="no" style="width: auto">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="text-white">2. Do you follow the daily Current Affairs? If yes, please mention the <b>newspaper or social media</b>
                                    page you follow to remain updated</label>
                                    <div class="row">
                                        <div class="col-sm-2 text-white">
                                            <label for="news-yes">YES :</label>
                                           <input id="news-yes" required type="radio" name="news" value="yes" style="width: auto">
                                        </div>
                                        <div class="col-sm-3 text-white">
                                            <label for="news-no">NO</label>
                                            <input id="news-no" required type="radio"  name="news" value="no" style="width: auto">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <textarea class="input-text required-field" name="news_message"
                                              placeholder="Write your opinion" required></textarea>
                                </div>

                                <div>
                                    <label class="text-white">3. On scale of 1 to 10, 1 being 'not prepared at all' and '10'
                                        being well-prepared, how do you assess your preparation?</label>
                                    <input class="input-text required-field" required type="number" max="10" min="1" placeholder="Rate from 1 to 10"  name="preparation" >
                                </div>

                                <div>
                                    <label class="text-white">4. On scale of 1 to 10, 1 being 'not necessary' and '10'
                                        being 'very necessary' how important do you think <b>'coaching classes'</b> are preparing for such exams?</label>
                                    <input class="input-text required-field" required type="number" max="10" min="1" placeholder="Rate from 1 to 10" name="coaching" >
                                </div>

                                <div>
                                    <textarea class="input-text required-field" name="preparation_message"
                                              placeholder="Write your opinion" required title=""></textarea>
                                </div>


                                <div>
                                    <label class="text-white">5. Are you Interested to join UPSC/APSC Live Online coaching Programme?</label>
                                    <div class="row">
                                        <div class="col-sm-2 text-white">
                                            <label for="join-yes">YES :</label>
                                            <input id="join-yes" type="radio" required name="join" value="yes" style="width: auto">
                                        </div>
                                        <div class="col-sm-3 text-white">
                                            <label for="join-no">NO</label>
                                            <input id="join-no" type="radio" required  name="join" value="no" style="width: auto">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="text-white">6. Are you Interested to join our regular Classroom Coaching in Dibrugarh or Guwahati?</label>
                                    <div class="row">
                                        <div class="col-sm-2 text-white">
                                            <label for="interest-yes">YES :</label>
                                             <input id="interest-yes" required type="radio" name="interest" value="yes" style="width: auto">
                                        </div>
                                        <div class="col-sm-3 text-white">
                                            <label for="interest-no">NO</label>
                                            <input id="interest-no" required type="radio"  name="interest" value="no" style="width: auto">

                                        </div>
                                    </div>
                                </div>

                                    <button type="submit" style="width:250px;">
                                        <span>SUBMIT</span>
                                        <div class="liquid"></div>
                                    </button>

                                <!--<button class="btn color-two button text-white" type="submit">SUBMIT</button>-->
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- User questions section end -->


    </main>
    <!-- Modal -->
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
@endsection





