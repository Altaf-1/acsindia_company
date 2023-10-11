@extends('layouts.main')
@section('title')
    Free Trail Course
@endsection
@section('links')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- main css -->

    <link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
    <!-- animate css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/animate.css')}}">
<!-- owl.carousel css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/owl.carousel.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
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

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @else
        <script>
            var t;

            function showModal() {
                $('#myModal').modal('show');
                clearTimeout(t)
            }

            $(document).ready(function() {
                t = setTimeout(showModal, 2000);
            });
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
			    <div class="carousel-item active custom-slider">
					<a href="">
				        <img class="d-block w-100 h-60" src="{{asset('comimages/head/u11.png')}}" alt="First slide">
				    </a>
				</div>
			</div>
		</div>
		<div>
		    <center><h2>---- FREE TRAIL COURSE ----</h2></center>
		</div>
    <div class="container-fluid mt-5">
        <div class="row ml-2 mr-2">
            <div class="row ml-2 mr-2">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                    <!-- 2 -->
                    <div class="single-features-light text-center">
                        <!-- single features -->
                        <div>
                            <i class="base-color fas fa-book fa-3x"></i>
                            <h4>STUDY PLAN</h4>
                            <div class="dropup-center dropup">
  <button class="btn btn-secondary text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    ENROLL
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="https://acsindiaias.com/course">UPSC LIVE CLASS</a></li>
    <li><a class="dropdown-item" href="https://acsindiaias.com/apsc/courses">APSC LIVE CLASS</a></li>
  </ul>
</div>
                        </div>
                    </div>
                    <!-- end single features -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                    <!-- 2 -->
                    <div class="single-features-light text-center">
                        <!-- single features -->
                        <div>
                            <i class="base-color fas fa-book fa-3x"></i>
                            <h4>ACS MATERIALS</h4>
                            <div class="dropup-center dropup">
  <button class="btn btn-secondary text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    ENROLL
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="https://acsindiaias.com/course">UPSC LIVE CLASS</a></li>
    <li><a class="dropdown-item" href="https://acsindiaias.com/apsc/courses">APSC LIVE CLASS</a></li>
  </ul>
</div>
                        </div>
                    </div>
                    <!-- end single features -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                    <!-- 1 -->
                    <div class="single-features-light text-center">
                        <!-- single features -->
                        <div>
                            <!-- uses solid style -->
                            <i class="base-color fas fa-book fa-3x"></i>
                            <h4>PREVIOUS QUESTION PAPER</h4>
                            <div class="dropup-center dropup">
  <button class="btn btn-secondary text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    ENROLL
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="https://acsindiaias.com/course">UPSC LIVE CLASS</a></li>
    <li><a class="dropdown-item" href="https://acsindiaias.com/apsc/courses">APSC LIVE CLASS</a></li>
  </ul>
</div>
                        </div>
                    </div>
                    <!-- end single features -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                    <!-- 2 -->
                    <div class="single-features-light text-center">
                        <!-- single features -->
                        <div>
                            <i class="base-color fas fa-book fa-3x"></i>
                            <h4>TEST SERIES</h4>
                            <a href="{{ route('user.lifetimeaccessibleaccount.test', 'LIFE TIME ACCESSIBLE ACCOUNT') }}"
                                class=" btn color-two button text-white">VIEW</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                    <!-- 2 -->
                    <div class="single-features-light text-center">
                        <!-- single features -->
                        <div>
                            <i class="base-color fas fa-book fa-3x"></i>
                            <h4>RECORDED CLASSES</h4>
                            <a href="{{ route('user.new.video', 'LIFE TIME ACCESSIBLE ACCOUNT') }}"
                                class=" btn color-two button text-white">View</a>
                        </div>
                    </div>
                    <!-- end single features -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                    <div class="single-features-light text-center">
                        <!-- single features -->
                        <div>
                            <i class="base-color fas fa-book fa-3x"></i>
                            <h4>MAINS (PYQ)</h4>
                            <div class="dropup-center dropup">
  <button class="btn btn-secondary text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    ENROLL
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="https://acsindiaias.com/course">UPSC LIVE CLASS</a></li>
    <li><a class="dropdown-item" href="https://acsindiaias.com/apsc/courses">APSC LIVE CLASS</a></li>
  </ul>
</div>
                        </div>
                    </div>
                </div>
                <!-- 100 current affairs -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                    <div class="single-features-light text-center">
                        <div>
                            <i class="base-color fab fa-leanpub fa-3x"></i>
                            <h4>100 important current affairs</h4>
                            <a href="{{ asset('pdf/ACS Prelims Current Affairs 2022 (100).pdf') }}" target="_blank"
                                class="btn color-two button text-white">VIEW</a>
                        </div>
                    </div>
                </div>
                <!-- REPORTS AND INDICES 2022 COMPILATION -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                    <div class="single-features-light text-center">
                        <div>
                            <i class="base-color fab fa-leanpub fa-3x"></i>
                            <h4>REPORTS AND INDICES 2022 COMPILATION</h4>
                            <a href="{{ asset('pdf/ACS Indices Reports Combilaions.pdf') }}" target="_blank"
                                class="btn color-two button text-white">VIEW</a>
                        </div>
                    </div>
                </div>
                <!-- INTERNATIONAL ORGANIZATIONS/INSTITUTIONS/GROUPINGS IN NEWS -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                    <div class="single-features-light text-center">
                        <div>
                            <i class="base-color fab fa-leanpub fa-3x"></i>
                            <h4>INTERNATIONAL ORGANIZATIONS/ INSTITUTIONS/ GROUPINGS IN NEWS</h4>
                            <a href="{{ asset('pdf/ACSInternationalOrganizationCombilaions.pdf') }}" target="_blank"
                                class="btn color-two button text-white">VIEW</a>
                        </div>
                    </div>
                </div>
                <!-- current affair question compilation -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                    <div class="single-features-light text-center">
                        <div>
                            <i class="base-color fab fa-leanpub fa-3x"></i>
                            <h4>ACS CURRENT AFFAIRS QUESTIONS COMPILATION</h4>
                            <a href="{{ asset('pdf/ACSPrelimsCurrentAffairsQuestionsCompilation22.pdf') }}" target="_blank"
                                class="btn color-two button text-white">VIEW</a>
                        </div>
                    </div>
                </div>
                {{-- acs wisdom --}}
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                    <div class="single-features-light text-center">
                        <div>
                            <i class="base-color fab fa-leanpub fa-3x"></i>
                            <h4>ACS WISDOM</h4>
                            <a href="{{ route('acs.wisdom') }}" target="_blank"
                                class="btn color-two button text-white">VIEW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="disapproveModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('free.trial.course.store') }}" method="post" id="disapproveRequestMessage"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="disapproveModalLabel">Fill the Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" name="name" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" name="email" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Phone No:</label>
                            <input type="text" class="form-control" name="phone" />
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">WhatsApp No:</label>
                            <input type="text" required class="form-control" name="whatsapp_no" />
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
    <script src='{{ asset('js/slick.min.js') }}'></script>
    <script src='{{ asset('js/main.js') }}'></script>

    <script src='{{ asset('js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('js/jquery.fancybox.pack.js') }}'></script>
    <script src='{{ asset('js/jquery.magnific-popup.min.js') }}'></script>
    <script src='{{ asset('js/waypoints.min.js') }}'></script>
    <script src='{{ asset('js/jquery.counterup.min.js') }}'></script>
    <script src='{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js') }}'></script>
    
@endsection
