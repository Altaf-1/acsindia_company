@extends('layouts.main')
@section('title')
    Quiz - Academy of Civil Services
@endsection
@section('links')
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('comimages/gbar.webp') }}" type="image/x-icon">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Slick  -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('styles')
    <style>
        .bg-courses {
            background-image: url("{{ asset('comimages/corbg.webp') }}");
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

        .card:hover {
            box-shadow: 0px 2px 4px 10px #064b70;
        }
    </style>
@endsection
@section('content')
    @if ($message = Session::get('success'))
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
                title: '{{ $message }}'
            })
        </script>
    @elseif($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @elseif($message = Session::get('info'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{ $message }}',
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
                        <h1>All The Best</h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
                                <span class="first-item">
                                    <a href="/">Homepage</a></span>
                                <span class="separator">&gt;</span>
                                <a href={{ route('quiz.outside.course.index', $course_name) }}
                                    class="text-white">{{ $course_name }}</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="total_time" value="{{ $quiz->total_time }}" />


        <script>
            var count = document.getElementById('total_time').value;
            console.log(moment(count, 'h:mm').format('h:mm'), moment().format('h:mm '));
            var count = moment.duration(moment(count, 'h:mm').diff(moment())).asSeconds();
            console.log(count);

            function convertHMS(value) {
                const sec = parseInt(value, 10); // convert value to number if it's string
                let hours = Math.floor(sec / 3600); // get hours
                let minutes = Math.floor((sec - (hours * 3600)) / 60); // get minutes
                let seconds = sec - (hours * 3600) - (minutes * 60); //  get seconds
                // add 0 if value < 10; Example: 2 => 02
                if (hours < 10) {
                    hours = "0" + hours;
                }
                if (minutes < 10) {
                    minutes = "0" + minutes;
                }
                if (seconds < 10) {
                    seconds = "0" + seconds;
                }
                return hours + ':' + minutes + ':' + seconds; // Return is HH : MM : SS
            }
            var interval = setInterval(function() {
                document.getElementById('count').innerHTML = convertHMS(count);
                count--;
                console.log(convertHMS(count));
                if (count === 0) {
                    clearInterval(interval);
                    alert('Time Up Quiz automatically submitted! Press OK to continue');
                    document.getElementById("myForm").submit();
                }
                // else {
                //     alert('Time Up Quiz automatically submitted! Press OK to continue');
                //     document.getElementById("myForm").submit();
                // }
            }, 1000);
        </script>
        <!-- end breadcrumb banner content area start -->
        <div class="container-fluid mt-5">

            <table class="table table-bordered">
                <thead>
                    <th>Rules</th>
                </thead>
                <tr>
                    <td class="bg-warning"> 1. When time is up quiz submitted automatically.</td>
                </tr>
            </table>
            <div id="count"
                style="border-top-left-radius:10px; border-bottom-left-radius:10px; background-color:black; padding:5px; padding-left:20px; padding-right:20px; z-index:999;font-size:24px; font-weight:bold;color:white; position:fixed;right:0;">
            </div>
            <hr>
            <!-- .row -->
            <div>
                <form id="myForm" action="{{ route('quiz.outside.course.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="quiz_id" value="{{ $id }}">
                    <input type="hidden" name="course_name" value="{{ $course_name }}">
                    <div class="row ml-2 mr-2 ">
                        @foreach ($datas as $data)
                            <div class="col-sm-12">
                                <div class="single-features-light mt-3">
                                    <div>
                                        <h4>{{ $loop->index + 1 }}. {!! $data->question !!}</h4>
                                        <div class="form-group">
                                            <input type="radio" name="answers{{ $loop->index }}"
                                                id="{{ $loop->index }}{{ $data->option1 }}"
                                                value="{{ $data->option1 }}">
                                            <label
                                                for="{{ $loop->index }}{{ $data->option1 }}">{{ $data->option1 }}</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="answers{{ $loop->index }}"
                                                id="{{ $loop->index }}{{ $data->option2 }}"
                                                value="{{ $data->option2 }}">
                                            <label
                                                for="{{ $loop->index }}{{ $data->option2 }}">{{ $data->option2 }}</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="answers{{ $loop->index }}"
                                                id="{{ $loop->index }}{{ $data->option3 }}"
                                                value="{{ $data->option3 }}">
                                            <label
                                                for="{{ $loop->index }}{{ $data->option3 }}">{{ $data->option3 }}</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="answers{{ $loop->index }}"
                                                id="{{ $loop->index }}{{ $data->option4 }}"
                                                value="{{ $data->option4 }}">
                                            <label
                                                for="{{ $loop->index }}{{ $data->option4 }}">{{ $data->option4 }}</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="form-group mt-3 ml-3">
                            <button type="submit" class="btn btn-primary text-white">Submit</button>
                        </div>
                    </div>
                    <!-- .row end -->
                </form>
            </div>
            <!-- .row end -->
        </div>
    </main>
@endsection
@section('footer')
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
@endsection
