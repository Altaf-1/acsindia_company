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
    <link rel="stylesheet" href="{{ asset('css/main(1).css') }}">
    <!-- Slick  -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                                <span class="last-item">Quiz</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb banner content area start -->
        <div class="container-fluid mt-5">
            <!-- .row -->
            <div>
                <form id="myForm" action="{{ route('testseriesquiz.question.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="test_series_quiz_id" value="{{ $id }}">
                    <input type="hidden" name="type" value="{{ $type }}">
                    <input type="hidden" name="course_name" value="{{ $course_name }}">
                    <div class="row ml-2 mr-2 ">
                        @foreach ($datas as $data)
                            <div class="col-sm-12 ">
                                <div class="single-features-light mt-3">
                                    <div>
                                        <h4>{{ $loop->index + 1 }}. {!! $data->question !!}</h4>
                                        <div class="form-group">
                                            <input required type="radio" name="answers{{ $loop->index }}"
                                                id="{{ $loop->index }}{{ $data->option1 }}"
                                                value="{{ $data->option1 }}">
                                            <label
                                                for="{{ $loop->index }}{{ $data->option1 }}">{{ $data->option1 }}</label>
                                        </div>
                                        <div class="form-group">
                                            <input required type="radio" name="answers{{ $loop->index }}"
                                                id="{{ $loop->index }}{{ $data->option2 }}"
                                                value="{{ $data->option2 }}">
                                            <label
                                                for="{{ $loop->index }}{{ $data->option2 }}">{{ $data->option2 }}</label>
                                        </div>
                                        <div class="form-group">
                                            <input required type="radio" name="answers{{ $loop->index }}"
                                                id="{{ $loop->index }}{{ $data->option3 }}"
                                                value="{{ $data->option3 }}">
                                            <label
                                                for="{{ $loop->index }}{{ $data->option3 }}">{{ $data->option3 }}</label>
                                        </div>
                                        <div class="form-group">
                                            <input required type="radio" name="answers{{ $loop->index }}"
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
