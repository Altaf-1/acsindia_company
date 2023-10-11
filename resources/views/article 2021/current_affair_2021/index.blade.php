<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas Basic -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>Degipedia - Academy of Civil Services</title>
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
    <!-- jQuery Fancybox  -->
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <style type="text/css">
        .bg-courses {
            background-image: url('{{asset('comimages/corbg.webp')}}');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- header area start -->
    <header id="header" class="transparent-header">
        <!-- #navigation start -->
        <nav class="navbar navbar-default navbar-expand-md navbar-light" id="navigation" data-offset-top="1">
            <!-- .container -->
            <div class="container">
                <!-- Logo and Menu -->
                <div class="navbar-header">
                    <div class="navbar-brand">
                        <a href="{{route('root')}}"><img src="{{asset('comimages/Logo1.webp')}}" alt="Logo " /></a>
                    </div>
                    <!-- site logo -->
                </div>
                <!-- Menu Toogle -->
                <div class="burger-icon">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <div class="collapse navbar-collapse " id="navbarCollapse">
                    <ul class="nav navbar-nav ml-auto">
                        <!-- Menu Link -->
                        <li class="subnav">
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="subnav">
                            <a href="#features">Current Affairs</a>
                        </li>
                    </ul>
                </div>
                <!-- Menu Toogle end -->
            </div>
            <!-- .container end -->
        </nav>
        <!-- #navigation end -->
    </header>
    <!-- end header area -->
    <main>
        <!-- breadcrumb banner content area start -->
        <div class="lernen_banner bg-courses">
            <div class="container">
                <div class="row">
                    <div class="lernen_banner_title">
                        <h1>
                            @if($type == 'current_affair')
                            CURRENT AFFAIRS 2023
                            @elseif($type == 'article')
                            ARTICLES 2023
                            @elseif($type == 'assam_current_affair')
                            ASSAM CURRENT AFFAIRS 2023
                            @endif
                        </h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
                                <span class="first-item">
									<a href="/">Homepage</a></span>
                                <span class="separator">&gt;</span>
                                <span class="last-item">Current Affairs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="event">
            <div id="events" class="wrap-bg pt-0 pb-3"
                 style="background-image: url({{asset('')}});">

                <div class="row justify-content-center text-center container-fluid pt-5">
                    <div class="col-lg-12">
                        <form action="{{route('current.affair.index', $type )}}" method="GET">
                            @csrf
                            <div class="form-group">
                                <input type="search" class="form-control w-25" name="current_affair" style="margin: auto"/>
                            </div>
                            <button type="submit" class="btn btn-primary text-white mb-5">Search</button>
                        </form>
                    </div>
                    <div class="container">
                        <!-- .row -->
                        <div class="row">

                            @foreach($current_affairs as $current_affair)
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 course-single mb20 ">
                                <!-- 1 -->
                                <div class="themeioan_event bg-secondary">
                                    <article>
                                        <!-- single event start -->
                                        <div class="event-photo bg-secondary">

                                            <img src="{{asset('storage/' . $current_affair->image)}}" style="height: 300px"
                                                 alt={{$current_affair->title}}"">
                                        </div>
                                        <div class="event-content bg-secondary ">
                                            <h5 class="title text-uppercase text-white">
                                                {{$current_affair->title}}
                                            </h5>

                                            <div class="btn-section mt-4">
                                                <a href="{{route('current.affair.show',$current_affair->id)}}"
                                                   class="color-two btn-custom smooth-scroll">READ
                                                    <i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- single event end-->
                                </div>
                            </div>
                            @endforeach

                        </div>
                   </div>
                            <!-- .row end -->
                        </div>
                    </div>
        </section>
    </main>
    <!-- #footer area start -->
    <footer id="footer" class="wrap-bg-secondary">
        <div class="footer-top">
            <!-- .container -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <!-- footer widget -->
                        <div class="f-widget-title">
                            <h4>Academy of Civil Services</h4>
                        </div>
                        <div class="footer-text">
                            <p>Join with us on social media</p>
                        </div>
                        <div class="icon-round-white footer-social mt-25">
                            <a href="https://www.facebook.com/acs.dibrugarh" title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a>
                            <!-- <a href="" title="Twitter"><i class="fab fa-twitter"></i></a> -->
                            <a href="https://www.instagram.com/academyofcivilservices" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.google.com/search?q=academic+of+civil+services&oq=ac&aqs=chrome.1.69i60j69i59j69i57j35i39j69i60l3j69i61.1534j0j7&sourceid=chrome&ie=UTF-8" target="_blank" title="Google+"><i class="fab fa-google-plus"></i></a>
                        </div>
                    </div>
                    <!-- footer widget -->
                    <div class="col-xl-2 offset-xl-1 col-lg-2 col-sm-6">
                        <!-- footer widget -->
                        <div class="f-widget-title">
                            <h4>Visitors</h4>
                        </div>
                        <div class="f-widget-link">
                            <ul>
                                <!-- Menu Link -->
                                <li>This Month: 50</li>
                                <li>This Week: 15</li>
                                <li>Today: 5</li>
                                <li>Online: 3</li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer widget -->
                    <div class="col-xl-2 offset-xl-1 col-lg-3 col-sm-6">
                        <!-- footer widget -->
                        <div class="f-widget-title">
                            <h4>About</h4>
                        </div>
                        <div class="f-widget-link">
                            <ul>
                                <!-- Menu Link -->
                                <li><a href="#header">Home</a></li>
                                <li><a href="#ourcorses">Courses</a></li>
                                <li><a href="#event">Event</a></li>
                                <li><a href="#con">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer widget -->
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <!-- footer widget -->
                        <div class="f-widget-title">
                            <h4>Contact us</h4>
                        </div>
                        <div class="sigle-address">
                            <div class="address-icon">
                                <i class="far fa-envelope-open"></i>
                            </div>
                            <p>acsindia.ias@gmail.com</p>
                        </div>
                        <div class="sigle-address">
                            <div class="address-icon">
                                <i class="fas fa-headphones"></i>
                            </div>
                            <p> 9085268769 | 9864354984</p>
                        </div>
                    </div>
                    <!-- footer widget -->
                </div>
            </div>
        </div>
        <!-- .container end -->
        <!-- #footer bottom start -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright text-center">
                        <p>Designed By Academy of Civil Services</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #footer bottom end -->
    </footer>
    <!-- #footer area end -->
    <!-- JavaScript File -->
    <!-- jQuery -->
    <script src='{{asset('js/jquery-3.4.1.min.js')}}'></script>
    <!-- Main -->
    <script src='{{asset('js/main.js')}}'></script>
    <!-- Bootstrap -->
    <script src='{{asset('js/bootstrap.min.js')}}'></script>
    <!-- Slick -->
    <script src='{{asset('js/slick.min.js')}}'></script>
    <!-- Fancybox -->
    <script src='{{asset('js/jquery.fancybox.pack.js')}}'></script>
    <!-- Magnific Popup core JS file -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Waypoints -->
    <script src='{{asset('js/waypoints.min.js')}}'></script>
    <!-- Counterup -->
    <script src='{{asset('js/jquery.counterup.min.js')}}'></script>
</body>

</html>
