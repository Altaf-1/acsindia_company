
@extends('layouts.main')
@section('title')
    For Counsellor
@endsection
@section('links')

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
@endsection


@section('styles')
    <style>
        .fa {
            color: #fb770c;
        !important;
        }
    </style>
@endsection

@section('content')

    <!--navbar-->
    <section id="header" class="transparent-header" style="background-color: orange">
        <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
    </section>

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

    <section class="container emp-profile rounded border w-50" style="margin-top: 150px">
        <form action="{{ route('user.daily.counsellor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="task_id" value="{{$id}}">

            <div class="form-group font-weight-bold">
                <label for="daily">Daily Task:</label>
                <input type="text" readonly style="border-radius: 20px;" class="form-control" value="{{\App\DailyTask::where('id', $id)->get()->first()->task}}">
            </div>

            <div class="form-group font-weight-bold">
                <label for="name">Name:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" value="" name="name">
            </div>

            <div class="form-group font-weight-bold">
                <label for="number">Number:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" value="" name="number">
            </div>

            <div class="form-group font-weight-bold">
                <label for="feedback">Feedback:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" value="" name="feedback">
            </div>

            <div class="form-group font-weight-bold">
                <label for="follow">Follow Up Date:</label>
                <input type="date" style="border-radius: 20px;" class="form-control" value="" name="follow">
            </div>



            <br>
            <div class="form-group font-weight-bold text-center">
                <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>
            </div>

        </form>

    </section>

    <section class="container mt-5">
        <div class="card shadow mb-4" id="usersTable">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">For Counsellor List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Daily Task</th>
                            <th>Name</th>
                            <th>Feedback</th>
                            <th>Number</th>
                            <th>Follow Up Date</th>
                                  <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody id="data">
                        @forelse($values as $value)
                            <tr>
                                <td>{{\App\DailyTask::where('id', $id)->get()->first()->task}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->feedback}}</td>
                                 <td>{{$value->number}}</td>
                                <td>{{$value->follow}}</td>
                                              <td>
                                    <form action="{{route('admin.daily-counsellor.destroy', $value->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-primary" style="background-color: red" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No Counsellor found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>



@endsection
@section('footer')
    @include('partials.footer')
@endsection
@section('scripts')
    <script src='{{asset("js/jquery-3.4.1.min.js")}}'></script>
    <script src='{{asset("js/slick.min.js")}}'></script>
    <script src='{{asset("js/main.js")}}'></script>

    <script src='{{asset("js/bootstrap.min.js")}}'></script>
    <script src='{{asset("js/jquery.fancybox.pack.js")}}'></script>
    <script src='{{asset("js/jquery.magnific-popup.min.js")}}'></script>
    <script src='{{asset("js/waypoints.min.js")}}'></script>
    <script src='{{asset("js/jquery.counterup.min.js")}}'></script>

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

@endsection
