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

        h3>p {
            display: inline !important;
            font-size: 20px;
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
    <div class="lernen_banner bg-courses">
        <div class="container">
            <div class="row">
                <div class="lernen_banner_title">
                    <h1>Quiz</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
                            <span class="first-item">
                                <a href="/">Homepage</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item">Online Quiz</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header area -->
    <main>
        <script>
            var currenntIndex = 1;
        </script>
        <div class="container mb-5 mt-2 mx-auto">
            <div class="row p-2">
            <div class="col-lg-4 col-sm-4">
                <h3>(<span id="currentIndex"></span>/{{ $datas->count() }})</h3>
            </div>
            <div class="col-lg-4 col-sm-4"></div>
            <div class="col-lg-4 col-sm-4">
                <h3>Points: <span id="points">0</span></h3>
            </div>
            
            <form id="myForm" action="{{ route('online.quiz.question.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="online_quiz_id" value="{{ $id }}">
            <input type="hidden" name="course_name" value="{{ $course_name }}">

            <input type="hidden" id="lastIndex" value="{{ $datas->count() }}">

            <div class="row ">
                @foreach ($datas as $data)
                    <div id="question{{ $loop->index + 1 }}" class="col-sm-12 col-lg-6 question">
                        <div class=" mt-3">
                            <h3>{{ $loop->index + 1 }}. {!! $data->question !!}</h3>
                            <input type="hidden" name="correctAnswer{{ $loop->index }}"
                                value="{{ $data->correct_option }}">
                            <div class="row ">
                                <div class="col-lg-6 col-sm-12 m-1 ">
                                    <input type="button" class="btn btn-primary text-white"
                                         value="{{ $data->option1 }}"
                                        onclick="checkAnswer('{{ $data->correct_option }}',this.value,'{{ $data->explanation1 }}','{{ $data->point }}')">
                                </div>
                                <div class="col-lg-6 col-sm-12 m-1  ">
                                    <input type="button" class="btn btn-primary text-white"
                                         value="{{ $data->option2 }}"
                                        onclick="checkAnswer('{{ $data->correct_option }}',this.value,'{{ $data->explanation2 }}','{{ $data->point }}')">
                                </div>
                                <div class="col-lg-6 col-sm-12 m-1 ">
                                    <input type="button" class="btn btn-primary text-white"
                                        value="{{ $data->option3 }}"
                                        onclick="checkAnswer('{{ $data->correct_option }}',this.value,'{{ $data->explanation3 }}','{{ $data->point }}')">
                                </div>
                                <div class="col-lg-6 col-sm-12 m-1 ">
                                    <input type="button" class="btn btn-primary text-white"
                                         value="{{ $data->option4 }}"
                                        onclick="checkAnswer('{{ $data->correct_option }}',this.value,'{{ $data->explanation4 }}','{{ $data->point }}')">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="form-group mt-3 ml-3 prevContainer">
                    <button id="prev" type="button" class="btn btn-primary text-white">Previous</button>
                </div> --}}

                {{-- <div class="form-group mt-3 ml-3 nextConatiner">
                    <button id='next' type="button" class="btn btn-primary text-white">Next</button>
                </div> --}}

                <div class="form-group mt-3 ml-3 submitContainer">
                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                </div>

            </div>
        </form>
        </div>
        
            
        </div>
    </main>
@endsection
@section('footer')
    @include('partials.footer')
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        var points = {};
        var lastIndex = document.getElementById('lastIndex').value;
        $('.question').hide();
        $('#question1').show();
        // $('.prevContainer').hide();
        $('.submitContainer').hide();
        document.getElementById('currentIndex').innerHTML = currenntIndex
        window.addEventListener('click', function() {
            document.getElementById('currentIndex').innerHTML = currenntIndex
            if (currenntIndex > 1) {
                $('.prevContainer').show();
            } else {
                $('.prevContainer').hide();
            }
            if (currenntIndex < lastIndex) {
                $('.nextConatiner').show();
            } else {
                $('.nextConatiner').hide();
            }
            if (currenntIndex != lastIndex) {
                $('.submitContainer').hide();

            }
        })

        function sum(obj) {
            var sum = 0;
            for (var el in obj) {
                if (obj.hasOwnProperty(el)) {
                    sum += parseFloat(obj[el]);
                }
            }
            return sum;
        }

        function checkAnswer(correct_option, entered_option, explanation, point) {
            let synth = speechSynthesis;
            let status = false;
            status = correct_option == entered_option;
            let utterance = new SpeechSynthesisUtterance(explanation);
            for (let voice of synth.getVoices()) {
                if (voice.name === 'Google UK English male') {
                    utterance.voice = voice;
                }
            }
            synth.speak(utterance);
            Swal.fire({
                allowOutsideClick: false,
                allowEscapeKey: false,
                title: explanation,
                icon: status ? 'success' : 'error',
                confirmButtonText: status ? 'Next' : 'Retry',
                showCloseButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                                       synth.cancel();
 if (status) {
                        if (currenntIndex == lastIndex) {
                            $('.submitContainer').show();
                        }
                        points[currenntIndex] = point;
                        document.getElementById('points').innerHTML = sum(points)
                        if (currenntIndex < lastIndex) {
                            currenntIndex++;
                            $('.question').hide();
                            $('#question' + currenntIndex).show();
                        }
                    }
                }
            })
        }

        // document.getElementById('prev').addEventListener('click', function() {
        //     console.log(currenntIndex);
        //     currenntIndex--;
        //     $('.question').hide();
        //     $('#question' + currenntIndex).show();
        // });
    </script>
    <script src='{{ asset('js/jquery-3.4.1.min.js') }}'></script>
    <script src='{{ asset('js/main.js') }}'></script>
    <script src='{{ asset('js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('js/slick.min.js') }}'></script>
    <script src='{{ asset('js/jquery.fancybox.pack.js') }}'></script>
    <script src='{{ asset('js/jquery.magnific-popup.min.js') }}'></script>
    <script src='{{ asset('js/waypoints.min.js') }}'></script>
    <script src='{{ asset('js/jquery.counterup.min.js') }}'></script>
@endsection
