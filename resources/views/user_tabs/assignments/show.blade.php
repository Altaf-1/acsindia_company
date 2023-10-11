@extends('layouts.main')
@section('title')
    Assignments - Academy of Civil Services
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
                        <h1>ANSWER WRITING & EVALUATION REPORT</h1>
                        <div class="lernen_breadcrumb">
                            <div class="breadcrumbs">
                                <span class="first-item">
                                    <a href="/">Homepage</a></span>
                                <span class="separator">&gt;</span>
                                <span class="last-item">ANSWER WRITING & EVALUATION REPORT</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb banner content area start -->
        <!-- DataTales Example -->
        <div class="container pt-3 pb-3 justify-content-center">
            <div class="card shadow mb-4" id="usersTable">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Assignments</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Week</th>
                                    <th>File</th>
                                    <th>Score</th>
                                    <th>Submit</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody id="data">
                                @forelse($datas as $data)
                                    <tr>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->weak }}</td>
                                        <td>
                                            @if ($data->pdf != null)
                                                <a href="{{ asset('storage/' . $data->pdf) }}" class="btn btn-outline-info"
                                                    target="_blank"> Download File</a>
                                            @else
                                                No File Attached
                                            @endif
                                        </td>
                                        <td>
                                            {{ \App\UserAssignment::where('assignment_id', $data->id)->where('user_id', Auth::user()->id)->get()->first()->score ?? ' ' }}
                                        </td>
                                        <td>
                                            @if (\App\UserAssignment::where('assignment_id', $data->id)->where('user_id', Auth::user()->id)->get()->isNotEmpty() != 1)
                                                <a href="{{ route('assignment.create', $data->id) }}"
                                                    class="btn btn-outline-success">Submit</a>
                                            @else
                                                SUBMITTED
                                                <a href="{{ asset('storage/' .\App\UserAssignment::where('assignment_id', $data->id)->where('user_id', Auth::user()->id)->get()->first()->pdf) }}"
                                                    class="btn btn-outline-info">View</a>
                                            @endif
                                        </td>
                                        <td>
                                            @if (isset(\App\UserAssignment::where('assignment_id', $data->id)->where('user_id', Auth::user()->id)->get()->first()->result))
                                                <a href="{{ asset('storage/' .\App\UserAssignment::where('assignment_id', $data->id)->where('user_id', Auth::user()->id)->get()->first()->result) }}"
                                                    class="btn btn-outline-info">View</a>
                                            @endif
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10">No Notifications found</td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>
                        {{ $datas->links() }}
                    </div>
                </div>
            </div>
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
