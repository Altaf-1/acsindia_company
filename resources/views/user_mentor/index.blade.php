@extends('layouts.main') @section('title')
    Articles - Academy of Civil Services
@endsection
@section('links')
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('comimages/gbar.webp') }}" type="image/x-icon" />
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <!-- Slick  -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}" />
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
    @endif
    <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
    <main>

        <div class="mt-4 mb-3 container">
            <h4 class="mt-2 text-center bg-info text-white p-3">Book Your Slot For Personal Mentorship</h4>
            <a href="{{ route('user_mentor.slots') }}" class="btn btn-danger text-white mt-4">See All Your Booking Slot</a>
        </div>

        <div class="container mt-5 " style="overflow-x:auto;">
            <table class="table bg-primary p-5 text-white">
                <thead>
                    <tr>
                        <th scope="col">Subjet</th>
                        <th scope="col">Monday</th>
                        <th scope="col">Tuesday</th>
                        <th scope="col">Wednesday</th>
                        <th scope="col">Thusday</th>
                        <th scope="col">Friday</th>
                        <th scope="col">Saturday</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($datas as $data)
                        <tr>
                            <td>{{ $data->course_name }}</td>
                            <td>
                                @if ($data->day1 !== '')
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropday1{{ $loop->index . '' . $data->id }}">
                                        {{ $data->day1 }}
                                    </button>
                                    <div class="modal fade" id="staticBackdropday1{{ $loop->index . '' . $data->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">
                                                        Slot Booking
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <h3>You Want To Book This Slot For Personal Mentorship ?</h3>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('user_mentor.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="user_id"
                                                            value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="course_name"
                                                            value="{{ $data->course_name }}">
                                                        <input type="hidden" name="slot" value="{{ $data->day1 }}">
                                                        <input type="hidden" name="day" value="Monday">
                                                        <button type="submit" class="btn btn-success text-white"
                                                            data-bs-dismiss="modal">
                                                            Confirm
                                                        </button>
                                                    </form>
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Not Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if ($data->day2 !== '')
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropday2{{ $loop->index . '' . $data->id }}">
                                        {{ $data->day2 }}
                                    </button>
                                    <div class="modal fade" id="staticBackdropday2{{ $loop->index . '' . $data->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">
                                                        Slot Booking
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <h3>You Want To Book This Slot For Personal Mentorship ?</h3>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('user_mentor.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="user_id"
                                                            value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="course_name"
                                                            value="{{ $data->course_name }}">
                                                        <input type="hidden" name="slot"
                                                            value="{{ $data->day2 }}">
                                                        <input type="hidden" name="day" value="Tuesday">
                                                        <button type="submit" class="btn btn-success text-white"
                                                            data-bs-dismiss="modal">
                                                            Confirm
                                                        </button>
                                                    </form>
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Not Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if ($data->day3 !== '')
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropday3{{ $loop->index . '' . $data->id }}">
                                        {{ $data->day3 }}
                                    </button>
                                    <div class="modal fade" id="staticBackdropday3{{ $loop->index . '' . $data->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">
                                                        Slot Booking
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <h3>You Want To Book This Slot For Personal Mentorship ?</h3>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('user_mentor.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="user_id"
                                                            value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="course_name"
                                                            value="{{ $data->course_name }}">
                                                        <input type="hidden" name="slot"
                                                            value="{{ $data->day3 }}">
                                                        <input type="hidden" name="day" value="Wednesday">
                                                        <button type="submit" class="btn btn-success text-white"
                                                            data-bs-dismiss="modal">
                                                            Confirm
                                                        </button>
                                                    </form>
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Not Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if ($data->day4 !== '')
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropday4{{ $loop->index . '' . $data->id }}">
                                        {{ $data->day4 }}
                                    </button>
                                    <div class="modal fade" id="staticBackdropday4{{ $loop->index . '' . $data->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">
                                                        Slot Booking
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <h3>You Want To Book This Slot For Personal Mentorship ?</h3>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('user_mentor.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="user_id"
                                                            value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="course_name"
                                                            value="{{ $data->course_name }}">
                                                        <input type="hidden" name="slot"
                                                            value="{{ $data->day4 }}">
                                                        <input type="hidden" name="day" value="Thrusday">
                                                        <button type="submit" class="btn btn-success text-white"
                                                            data-bs-dismiss="modal">
                                                            Confirm
                                                        </button>
                                                    </form>
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Not Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if ($data->day5 !== '')
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropday5{{ $loop->index . '' . $data->id }}">
                                        {{ $data->day5 }}
                                    </button>
                                    <div class="modal fade" id="staticBackdropday5{{ $loop->index . '' . $data->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">
                                                        Slot Booking
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <h3>You Want To Book This Slot For Personal Mentorship ?</h3>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('user_mentor.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="user_id"
                                                            value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="course_name"
                                                            value="{{ $data->course_name }}">
                                                        <input type="hidden" name="slot"
                                                            value="{{ $data->day5 }}">
                                                        <input type="hidden" name="day" value="Friday">
                                                        <button type="submit" class="btn btn-success text-white"
                                                            data-bs-dismiss="modal">
                                                            Confirm
                                                        </button>
                                                    </form>
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Not Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if ($data->day6 !== '')
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropday6{{ $loop->index . '' . $data->id }}">
                                        {{ $data->day6 }}
                                    </button>
                                    <div class="modal fade" id="staticBackdropday6{{ $loop->index . '' . $data->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">
                                                        Slot Booking
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <h3>You Want To Book This Slot For Personal Mentorship ?</h3>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('user_mentor.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="user_id"
                                                            value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="course_name"
                                                            value="{{ $data->course_name }}">
                                                        <input type="hidden" name="slot"
                                                            value="{{ $data->day6 }}">
                                                        <input type="hidden" name="day" value="Saturday">
                                                        <button type="submit" class="btn btn-success text-white"
                                                            data-bs-dismiss="modal">
                                                            Confirm
                                                        </button>
                                                    </form>
                                                    <button type="button" class="btn btn-danger text-white"
                                                        data-bs-dismiss="modal">
                                                        Not Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">NO DATA</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
@endsection
