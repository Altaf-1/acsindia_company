<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas Basic -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Title -->
    <title>ACS MATERIALS - Academy of Civil Services</title>
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
    <!--navbar-->
    <section id="header" class="transparent-header">
        <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
    </section>
    <!-- end header area -->
    <main>
        <!-- breadcrumb banner content area start -->
        <div class="lernen_banner bg-courses">
            <div class="container">
                <div class="row">
                    <div class="lernen_banner_title">
                        <h2 class="text-white">ACS MATERIALS</h2>
                        <h4 class="text-white">click below</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb banner content area start -->
        <!-- contact area start -->
       <div id="features" class="wrap-bg">
            <!-- .container -->
            <h2 class="bg-dark text-white text-center mb-3">PRELIMS MATERIALS</h2>
            <div class="container">
                <!-- .row -->
                <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4>ECONOMY</h4>
                                <form action="{{route('user.pdf-view.index')}}" method="post">
                                        @csrf
                                        <input type="hidden"
                                               name="drive_link"
                                               value="https://drive.google.com/file/d/1sDfXusCiC2zHwFnoeKhsu1WBCKNtZKZ0/">
                                        <button type="submit" class="btn color-two button text-white">Download</button>
                                    </form>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4>ETHICS</h4>
                                <form action="{{route('user.pdf-view.index')}}" method="post">
                                        @csrf
                                        <input type="hidden"
                                               name="drive_link"
                                               value="https://drive.google.com/file/d/1jVFcRvOMwh00np3rQiCn7riizsMSK9-a/">
                                        <button type="submit" class="btn color-two button text-white">Download</button>
                                    </form>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4>GEOGRAPHY</h4>
                                <form action="{{route('user.pdf-view.index')}}" method="post">
                                        @csrf
                                        <input type="hidden"
                                               name="drive_link"
                                               value="https://drive.google.com/file/d/1RbVIS5wkR8BrT0dPgZxO5ELXEBn4qKc1/">
                                        <button type="submit" class="btn color-two button text-white">Download</button>
                                    </form>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4>GEOGRAPHY</h4>
                                <h6>(Revision)</h6>
                                <form action="{{route('user.pdf-view.index')}}" method="post">
                                        @csrf
                                        <input type="hidden"
                                               name="drive_link"
                                               value="https://drive.google.com/file/d/1K800bCQ2zwL7T6nH1csKqmD3nOrDM7xO/">
                                        <button type="submit" class="btn color-two button text-white">Download</button>
                                    </form>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4>POLITY</h4>
                                 <a href="{{asset('https://drive.google.com/file/d/1nAkGcNkCZ6nBoU1UaSEy3M7sK0txEroS//view?usp=sharing')}}" class=" btn color-two button text-white">DOWNLOAD</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                   
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4>Science & Technology</h4>
                                <a href="{{asset('https://drive.google.com/file/d/1zKJTRiLyt5OOtuXH9ybcs5mi6dfK8DH4/view?usp=sharing')}}" class=" btn color-two button text-white">DOWNLOAD</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4 class="text-uppercase">INDIAN HISTORY</h4>
                                <form action="{{route('user.pdf-view.index')}}" method="post">
                                        @csrf
                                        <input type="hidden"
                                               name="drive_link"
                                               value="https://drive.google.com/file/d/1Z-sq3UW3ilI3pK7nSBRJ4x-r9AsWlysw/">
                                        <button type="submit" class="btn color-two button text-white">Download</button>
                                    </form>
                            </div>
                        </div>
                        
                        <!-- end single features -->
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4 class="text-uppercase">Ecology and Environment</h4>
                                <form action="{{route('user.pdf-view.index')}}" method="post">
                                        @csrf
                                        <input type="hidden"
                                               name="drive_link"
                                               value="https://drive.google.com/file/d/1zPDXWb3jcDPX0HJ38qj35biRmuwFqq6n/">
                                        <button type="submit" class="btn color-two button text-white">Download</button>
                                    </form>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4 class="text-uppercase">Art & Culture</h4>
                                <form action="{{route('user.pdf-view.index')}}" method="post">
                                        @csrf
                                        <input type="hidden"
                                               name="drive_link"
                                               value="https://drive.google.com/file/d/1AcpmNw5r7DJfQCkYf6789n63xoYEkYC3/">
                                        <button type="submit" class="btn color-two button text-white">Download</button>
                                    </form>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                </div>
                <!-- .row end -->
            </div>
                <!-- .row end -->
            </div>
            <h2 class="bg-dark text-white text-center mb-3 mt-3">MAINS MATERIALS</h2>
            <div class="container">
                <!-- .row -->
                <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4>GS-I</h4>
                                        <a href="https://acsindiaias.com/mains_2023/material1" class="btn color-two button text-white">Download</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4>GS-II</h4>
                                        <a href="https://acsindiaias.com/mains_2023/material2" class="btn color-two button text-white">Download</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4>GS-III</h4>
                                        <a href="https://acsindiaias.com/mains_2023/material3" class="btn color-two button text-white">Download</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                        <!-- 3 -->
                        <div class="single-features-light text-center">
                            <!-- single features -->
                            <div>
                                <i class="base-color fab fa-leanpub fa-3x"></i>
                                <h4>GS-IV</h4>
                                        <a href="https://acsindiaias.com/mains_2023/material4" class="btn color-two button text-white">Download</a>
                            </div>
                        </div>
                        <!-- end single features -->
                    </div>

                </div>
                <!-- .row end -->
            </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>

        <!-- newsletter area start -->
        <div id="newsletter">
            <div class="container">
                <div class="footer-subscribe">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h5 class="subscribe-text">Subscribe for latest updates and Discounts</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="subscribe-form-pt">
                                <!-- Begin Newsletter Signup Form -->
                                <form class="themeioan-form-newsletter form" action="#">
                                    <div class="newslleter-call">
                                        <input class="input-text required-field" type="text" placeholder="Your email" title="Your email" />
                                        <input class="newsletter-submit color-two button" type="submit" value="Subscribe" />
                                    </div>
                                </form>
                                <!--End Newsletter-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter area end -->
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
    <script src='{{asset("js/jquery-3.4.1.min.js")}}'></script>
    <script src='{{asset("js/main.js")}}'></script>
    <script src='{{asset("js/bootstrap.min.js")}}'></script>
    <script src='{{asset("js/slick.min.js")}}'></script>
    <script src='{{asset("js/jquery.fancybox.pack.js")}}'></script>
    <script src='{{asset("js/jquery.magnific-popup.min.js")}}'></script>
    <script src='{{asset("js/waypoints.min.js")}}'></script>
    <script src='{{asset("js/jquery.counterup.min.js")}}'></script>
</body>

</html>



