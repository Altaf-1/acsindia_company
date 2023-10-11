@extends('layouts.main')
@section('title')
    Course - Academy of Civil Services
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
        .bg-courses {
            background-image: url({{asset('comimages/corbg.webp')}});
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
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
        .card:hover{
            box-shadow: 0px 2px 4px 10px #064b70;
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
    @elseif($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @elseif($message = Session::get('info'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <!-- header area start -->
    <header id="header" class="transparent-header">
        <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
    </header>
    <!-- end header area -->
    <main>
        <!-- breadcrumb banner content area start -->
        <div class="lernen_banner bg-courses">
            <div class="container">
                <div class="row">
                    <div class="lernen_banner_title">
                        <h1>APSC Courses</h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
                                <span class="first-item">
									<a href="/">Homepage</a></span>
                                <span class="separator">&gt;</span>
                                <span class="last-item">APSC Courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb banner content area start -->
        
        <div id="courses" class="wrap-bg wrap-bg-dark bg-bottom-zero p-0">
            <div class="container p-0 justify-content-center ">
                <div class="row justify-content-center pt-5 ">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0 course-animation mb20">
                            <!-- 2 -->
                            <div class="themeioan_course">
                                <article>
                                    <!-- single course -->
                                    <div class="blog-photo ">
                                        <img class="img-fluid course-img"
                                             src="{{asset('cor/2.png')}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="title text-center">---- SELECT DATE ----</h5>
                                        <ul class="themeioan_ul_icon justify-content-center text-center">
                                            <li><a href="https://acsindiaias.com/apsc/course/38" class=" btn color-two button text-white mb-3">25 SEP</a></li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- end single course -->
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0 course-animation mb20">
                            <!-- 2 -->
                            <div class="themeioan_course">
                                <article>
                                    <!-- single course -->
                                    <div class="blog-photo ">
                                        <img class="img-fluid course-img"
                                             src="{{asset('cor/main/4.png')}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="title text-center">---- SELECT DATE ----</h5>
                                        <ul class="themeioan_ul_icon justify-content-center text-center">
                                            <li><a href="https://acsindiaias.com/apsc/course/44" class=" btn color-two button text-white mb-3">25 SEP</a></li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- end single course -->
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0 course-animation mb20">
                            <div class="themeioan_course">
                                <article>
                                    <div class="blog-photo ">
                                        <img class="img-fluid course-img"
                                             src="{{asset('cor/main/6.png')}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="title text-center">---- SELECT DATE ----</h5>
                                        <ul class="themeioan_ul_icon justify-content-center text-center">
                                            <li><a href="https://acsindiaias.com/apsc/course/39" class=" btn color-two button text-white mb-3">4 SEP</a></li>
                                            <li><a href="https://acsindiaias.com/apsc/course/45" class=" btn color-two button text-white mb-3">9 OCT</a></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0 course-animation mb20">
                            <div class="themeioan_course">
                                <article>
                                    <div class="blog-photo ">
                                        <img class="img-fluid course-img"
                                             src="{{asset('cor/write.png')}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="title text-center text-danger">---- 50% OFF ----</h4>
                                            <!--<p class="text-primary display-4 text-center" id="demo"></p>-->
                                        <ul class="themeioan_ul_icon justify-content-center text-center">
                                            <li><a href="https://acsindiaias.com/user/study/show/34" class=" btn color-two button text-white mb-3">Enroll Now</a></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>


        <!-- courses area start -->
        <div id="courses" class="wrap-bg wrap-bg-dark bg-bottom-zero p-0">
            <div class="container p-0 justify-content-center ">
                <div class="row justify-content-center pt-5 ">

                    @forelse($courses as $course)
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-0 course-animation mb20">
                            <!-- 2 -->
                            <div class="themeioan_course">
                                <article>
                                    <!-- single course -->
                                    <div class="blog-photo ">
                                        <img class="img-fluid course-img"
                                             src="{{asset('storage/'.$course->image)}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="title">{{$course->title}}</h5>
                                        <ul class="themeioan_ul_icon">
                                            <li><i class="fas fa-check-circle"></i> Live/Recorded Online Classes
                                            </li>
                                            <li><i class="fas fa-check-circle"></i> Q&A Session With Materials</li>
                                        </ul>
                                        <ul class="course-bottom-list justify-content-end">
                                            <li>
                                                <div class="course-duration">
                                                    <span class="fa fa-clock-o"></span>
                                                    <a href="{{route('apsc.course.show', $course->id)}}"
                                                       class=" btn color-two button text-white">KNOW
                                                        MORE</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- end single course -->
                            </div>
                        </div>

                    @empty

                    @endforelse


                    <!--study material courses-->
                    @foreach($studies as $study)
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 p-0 course-animation  mb20">
                            <!-- 2 -->
                            <div class="themeioan_course">
                                <article>
                                    <!-- single course -->
                                    <div class="blog-photo ">
                                        <img class="img-fluid course-img"
                                             src="{{asset('storage/'.$study->image)}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="title">{{$study->title}}</h5>
                                        <ul class="themeioan_ul_icon">
                                          {!! $study->front_options !!}
                                        </ul>
                                        <ul class="course-bottom-list justify-content-end">
                                            <li>
                                                <div class="course-duration">
                                                    <span class="fa fa-clock-o"></span>
                                                    <a href="{{route('user.study.show', $study->id)}}"
                                                       class=" btn color-two button text-white">KNOW
                                                        MORE</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <!-- end single course -->
                            </div>
                        </div>
                    @endforeach


            </div>
            <!-- .row end -->
        </div>
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
    <script>
// Set the date we're counting down to
var countDownDate = new Date("Sep 6, 2023 15:37:25").getTime();

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

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
@endsection
