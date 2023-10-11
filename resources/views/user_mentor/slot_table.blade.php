@extends('layouts.main') @section('title')
    Articles - Academy of Civil Services
    @endsection @section('links')
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
    @endsection @section('content')
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
    <main>

        <div class="mt-4 mb-3 container">
            <h4 class="mt-2 text-center bg-info text-white p-3">Your All Booking Slot For Personal Mentorship</h4>
        </div>

        <div class="container mt-5">
            <table class="table bg-primary p-5 text-white text-center">
                <thead>
                    <tr>
                        <th scope="col">Course Name</th>
                        <th scope="col">Day</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($datas as $data)
                        <tr>
                            <td scope="row">{{ $data->course_name }}</td>
                            <td scope="row">{{ $data->day }}</td>
                            <td scope="row">{{ $data->slot }}</td>
                            <td scope="row">
                                <form action="{{ route('user_mentor.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger text-white" type="submit">Delete Slot</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <td>NO DATA</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
@endsection
