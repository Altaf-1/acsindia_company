@extends('layouts.admin')
@section('title')
    User Webinars
@endsection
@section('content')
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif


    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User</h6>
        </div>
        <div class="card-body">
          <div>
            <h3>Name: <span class="font-weight-bold text-black-50">{{$student->user_name}}</span></h3>
            <h3>Email: <span class="font-weight-bold text-black-50">{{$student->user_email}}</span></h3>
            <h3>Phone: <span class="font-weight-bold text-black-50">{{$student->user_phone}}</span></h3>
            <h3>Counsellor: <span class="font-weight-bold text-black-50">{{$student->counsellor->name}}</span></h3>
            <h3>Webinar: <span class="font-weight-bold text-black-50">{{$student->webinar}}</span></h3>
            <h3>Course:
                <span class="font-weight-bold text-black-50">{{$student->check_user_course($student->user_email)[0]}}
                </span></h3>
            <h3>Joined Date:
                <span class="font-weight-bold text-black-50">{{$student->check_user_course($student->user_email)[1]}}
                </span></h3>
          </div>
        </div>
    </div>
@endsection

