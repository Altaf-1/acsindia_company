
@extends('layouts.main')
@section('title')
    Daily Task
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
        <form action="{{ route('user.daily-task.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group font-weight-bold">
                <label for="admin_id">Admin Name:</label>
                <input type="text" readonly style="border-radius: 20px;" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" name="admin_id" placeholder="Enter Name">
            </div>

            <div class="form-group font-weight-bold">
                <label for="task">Task:</label>
                <textarea style="border-radius: 20px;" class="form-control" rows="5" name="task" placeholder="Enter Task detail"></textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="file">Attached File:</label>
                <input type="file" style="border-radius: 20px;" class="form-control" name="file" placeholder="Enter Attached File">
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
                <h6 class="m-0 font-weight-bold text-primary">Daily Task List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Daily Task Id</th>
                            <th>Daily Task</th>
                            <th>Attached file</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>For Counsellor</th>
                            <th>Created At</th>
                        </tr>
                        </thead>
                        <tbody id="data">
                        @forelse($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->task}}</td>
                                <td>@if($task->file)
                                        <a href="{{asset('storage/'.$task->file)}}" target="_blank">Download File</a>
                                    @else
                                        No Document
                                    @endif</td>
                                <td>
                                    @if($task->status == 0)
                                        Pending
                                    @else
                                        <i class="fa fa-check-circle"
                                           style="color: greenyellow"></i>
                                    @endif
                                </td>
                                <td>
                                    @if($task->status == 0)
                                        <form action="{{route('user.daily-task.delete', $task->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-primary" style="background-color: red" type="submit">Delete</button>
                                            </form>
                                    @else
                                      Daily Task Complete
                                    @endif
                                </td>
                                   <td>
                                    <a href="{{route('user.daily.counsellor.index', $task->id)}}" class="btn btn-primary">Add</a>
                                </td>
                                <td>{{$task->created_at}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No Daily Task found</td>
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
