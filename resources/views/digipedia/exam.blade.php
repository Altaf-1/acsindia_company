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
@section('content')
     @if ($message = Session::get('success'))
        <a id="downloadDocs" onclick="submitBtn()" download href="{{ asset('/pdf/ACSUPSCCoaching.pdf') }}"></a>
        <script>
            function submitBtn() {
                document.getElementById("downloadDocs").click();
            }
            Swal.fire({
                title: '<strong>HTML <u>example</u></strong>',
                icon: 'success',
                title: ' Thank you for Registration',
                focusConfirm: false,
                confirmButtonText: 'Download Exam Structure',
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
    @if ($message = Session::get('info'))
        <script>
            Swal.fire({
                icon: 'Info',
                title: "{{ $message }}",
            })
        </script>
    @endif
    <main>

        <!--header content area start  position-center-->
        <div><img src="{{ asset('comimages/2023/exam-2.webp') }}" class="img-fluid d-block w-100 h-100" alt="...">
        </div>

        <!-- end header content area start -->
        <!-- why-us area start -->
        <div class="m-4">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="container">
                <form action="{{ route('acs.scholarship.mentoring.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf()
                                       <input type="hidden" name="type" value="1">
 <div class="mb-3">
                        <h3>Enter Name</h3>
                        <input required value="{{ old('name') }}" name="name" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <h3>Enter Email Address</h3>
                        <input required value="{{ old('email') }}" name="email" type="email" class="form-control"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <h3>Enter Phone Number</h3>
                        <input required value="{{ old('phone') }}" name="phone" type="text" class="form-control"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <h3>Year of Doing Coaching in ACS</h3>
                        <input required value="{{ old('year') }}" name="year" type="text" class="form-control"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 text-dark">
                            <h3 class="mb-3">Select Exam Location</h3>
                            <input type="radio" id="radio1" name="location" value="Dibrugarh" required>
                            <label for="radio1" style="font-size: 20px">Dibrugarh</label><br>
                            <input type="radio" id="radio2" name="location" value="Guwahati">
                            <label for="radio2" style="font-size: 20px">Guwahati</label>
                        </div>

                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                </form>
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
    @endsection
