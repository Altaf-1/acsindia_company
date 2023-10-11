@extends('layouts.main')
@section('title')
    User Profile
@endsection
@section('links')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- main css -->

    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
        <script src='{{ asset('js/jquery-3.4.1.min.js') }}'></script>

@endsection


@section('styles')
    <style>
        .fa {
            color: #134982;
             !important;
        }

        .bg-courses {
            background-image: url('{{ asset('comimages/corbg.webp') }}');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
    <!--navbar-->
    <section id="header" class="transparent-header">
        <!-- #navigation start -->
        @include('partials.navbar')
        <!-- #navigation end -->
    </section>

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif
    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif

    @if ($type === 'UPSC')
        @include('user.course')
    @elseif($type === 'APSC')
        @include('user.apsc')
    @elseif($type === 'RECORDED')
        @include('user.recorded')
    @elseif($type === 'STUDY_MATERIAL')
        @include('user.study')
    @endif
    
      @if (\App\InterviewPreparation::where('user_id', Auth::user()->id)->get()->isEmpty() && $course->title == 'APSC 2023 INTERVIEW PREPARATION')
        <script>
            $(document).ready(function() {
                $('#myModal').modal('show');
            })
        </script>
    @endif

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="disapproveModalLabel"
        aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <form action="{{ route('interviewPreparation.store') }}" method="post" id="disapproveRequestMessage"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="disapproveModalLabel">Fill the Form</h5>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">APSC Main Roll No:</label>
                            <input type="text" required class="form-control" name="roll_number" />
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Upload Your Profile Pic:</label>
                            <input type="file" class="form-control" name="profile" required />
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">APSC Mains Detailed Application Form (For Preparing Questions):</label>
                            <input type="file" class="form-control" name="attachment" required/>
                        </div>
                        <div class="modal-footer">
                            <button class="btn color-two button text-white " type="submit"><i
                                    class="fas fa-user-edit"></i>Save</button>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
@section('footer')
    @include('partials.footer')
@endsection
@section('scripts')
    <script src='{{ asset('js/jquery-3.4.1.min.js') }}'></script>
    <script src='{{ asset('js/slick.min.js') }}'></script>
    <script src='{{ asset('js/main.js') }}'></script>

    <script src='{{ asset('js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('js/jquery.fancybox.pack.js') }}'></script>
    <script src='{{ asset('js/jquery.magnific-popup.min.js') }}'></script>
    <script src='{{ asset('js/waypoints.min.js') }}'></script>
    <script src='{{ asset('js/jquery.counterup.min.js') }}'></script>

    <script>
        function editProfile(id) {

            var message = document.getElementById('disapproveRequestMessage')

            message.action = "/user/" + id + "/update"

            $('#disapproveModal').modal('show')
        }
    </script>

    <script>
        function subject(id) {

            var message = document.getElementById('additionalSubject')

            message.action = "/user/" + id + "/update/subject"

            $('#subjectModal').modal('show')
        }
    </script>

    <script>
        function registration(id) {
            $('#registerModal').modal('show')
        }
    </script>
@endsection
