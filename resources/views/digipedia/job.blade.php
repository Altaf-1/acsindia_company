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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
@endsection
@section('styles')
    <style>
        

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

        
    </style>
@endsection
@section('content')
    @if ($message = Session::get('success'))
        <script>
            function submitBtn() {
                document.getElementById("downloadDocs").click();
            }
            Swal.fire({
                title: '<strong>HTML <u>example</u></strong>',
                icon: 'success',
                title: ' Thank you for Registration',
                focusConfirm: false,
                confirmButtonColor: "#FF0000",
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    submitBtn();
                }
            })
        </script>
    @endif
    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                icon: 'Error',
                title: 'Something went wrong. Please try again',
            })
        </script>
    @endif
    <main>
        <div class="whatsapp_float">
            <a href="https://wa.me/919085268769" target="_blank">
                <img src="{{ asset('comimages/whatsapp.png') }}" width="80px" class="whatsapp_float_btn" />
            </a>
        </div>
        <!--header content area start  position-center-->
        <div><img src="{{asset('comimages/2023/job head.webp')}}" class="img-fluid d-block w-100 h-100" alt="..."></div>

        <marquee scrollamount="15">THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES
            EXAMINATION.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE
            LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE LARGEST ONLINE PLATFORM FOR INDIAN CIVIL SERVICES EXAMINATION.
        </marquee>
        <!-- end header content area start -->
        <!-- why-us area start -->
        <div class="m-4">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-xl-6 col-lg-5 why-us-left-bg">
                    <img style="height:450px; width:800px" target="_blank"
                        src="{{ asset('comimages/2023/aboutus.webp') }}" /></a>
                </div>
                <div class="col-lg-6" id="regis">
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf()
                        <div class="mb-3">
                            <h3>Name</h3>
                            <input required value="{{ old('name') }}" name="name" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <h3>Email Address</h3>
                            <input required value="{{ old('email') }}" name="email" type="email" class="form-control"
                                id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <h3>Phone Number</h3>
                            <input required value="{{ old('phone') }}" name="phone" type="text" class="form-control"
                                id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <h3>City</h3>
                            <input required value="{{ old('city') }}" name="city" type="text" class="form-control"
                                id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 text-dark">
                            <h3 class="mb-3">Apply For</h3>
                            <input type="radio" id="radio1" name="apply_for" value="Academic Counsellor">
                            <label for="radio1" style="font-size: 20px">Academic Counsellor</label><br>
                            <input type="radio" id="radio2" name="apply_for" value="Faculty">
                            <label for="radio2" style="font-size: 20px">Faculty</label><br>
                            <input type="radio" id="radio3" name="apply_for" value="Editor">
                            <label for="radio3" style="font-size: 20px">Video Editor</label>
                        </div>
                        <div class="mb-3 w-100" id="subjectContainer" >
                            <select name="subjects[]" id="subjects" class="form-control" multiple>
                                <option value="Indian Polity" class="form-control">Indian Polity</option>
                                <option value="Indian Economy" class="form-control">Indian Economy</option>
                                <option value="Geography" class="form-control">Geography</option>
                                <option value="Ecology and environment" class="form-control">Ecology and environment
                                </option>
                                <option value="Science and Technology" class="form-control">Science and Technology
                                </option>
                                <option value="Indian History" class="form-control">Indian History</option>
                                <option value="Art and culture" class="form-control">Art and culture</option>
                                <option value="Assam History" class="form-control">Assam History</option>
                                <option value="Geography" class="form-control"></option>
                                <option value="CSAT" class="form-control">CSAT</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <h3>Upload Resume</h3>
                            <input required name="resume" type="file" class="@error('resume') is-invalid @enderror">
                            @error('resume')
                                <div class="invalid-feedback mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary text-white">Submit</button>
                    </form>
                </div>

            </div>
        </div>
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
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#subjects').select2();
                $('#subjectContainer').hide();
            });
            $(document).click(function() {
                if (document.getElementById('radio2').checked) {
                     $('#subjectContainer').show();
                }else{
                     $('#subjectContainer').hide();
                }
            })
        </script>
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
