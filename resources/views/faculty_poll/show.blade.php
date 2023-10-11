@extends('layouts.main')
@section('title')
    Poll - Academy of Civil Services
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
                        <h1>Polls</h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
                                <span class="first-item">
                                    <a href="/">Homepage</a></span>
                                <span class="separator">&gt;</span>
                                <span class="last-item">Polls</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb banner content area start -->
        <div class="row justify-content-center">
            <section class="container emp-profile m-4  ">
                <form action="{{ route('faculty.poll.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="poll_id" value="{{ $poll->id }}">
                    @foreach ($questions as $question)
                        <div class="form-group font-weight-bold">
                            <label for="question" style="font-size: 24px;">{{ $loop->index + 1 }}.
                                {!! $question->question !!}</label>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="answer{{ $loop->index }}" value="{{ $question->option_1 }}"
                                id="answer_1{{ $loop->index }}">
                            <label for="answer_1{{ $loop->index }}">{{ $question->option_1 }}</label>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="answer{{ $loop->index }}" value="{{ $question->option_2 }}"
                                id="answer_2{{ $loop->index }}">
                            <label for="answer_2{{ $loop->index }}">{{ $question->option_2 }}</label>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="answer{{ $loop->index }}" value="{{ $question->option_3 }}"
                                id="answer_3{{ $loop->index }}">
                            <label for="answer_3{{ $loop->index }}">{{ $question->option_3 }}</label>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="answer{{ $loop->index }}" value="{{ $question->option_4 }}"
                                id="answer_4{{ $loop->index }}">
                            <label for="answer_4{{ $loop->index }}">{{ $question->option_4 }}</label>
                        </div>
                    @endforeach

                    <br>
                    <button class="btn button text-white" style="background: #fb770c" type="submit">Submit</button>

                </form>
            </section>
        </div>


    </main>
@endsection
@section('footer')
    @include('partials.footer')
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
