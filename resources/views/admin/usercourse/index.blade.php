@extends('layouts.admin')
@section('title')
    User Courses
@endsection
@section('links')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    @if($message = Session::get('success'))
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
                title: '{{$message}}'
            })
        </script>
    @endif
    <h4>Allot Courses to Students</h4>
    <form action="{{route('user.course.allot')}}" method="GET">
        @csrf
        <div class="input-group">
            <select name="user" class="form-control mr-4 searchable">
                <option value="0" selected>Select User's Email</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->email}}</option>
                @endforeach
            </select>

            <select name="course" class="form-control mr-4 searchable">
                <option value="0" selected>Select Course</option>
                @foreach($courses as $course)
                    <option value="{{$course->id}}">{{$course->title}}</option>
                @endforeach
            </select>
            <button class="btn btn-primary" type="submit">
                Allot Course
            </button>
        </div>
    </form>
    <hr>
    <!-- Search -->
    <form class="d-sm-inline-block form-inline mr-auto my-md-0 mw-100 navbar-search"
          action="{{route('admin.user.course')}}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="searchUser" placeholder="Search email..."
                   aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>


    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Courses</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Enrolled Id</th>
                        <th>User Id</th>
                        <th>User Name</th>
                        <th>Course Title</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($user_courses as $enroll)
                        <tr>
                            <td>{{$enroll->id}}</td>
                             <td>{{$enroll->user_id}}</td>
                            <td>{{\App\User::where('id',$enroll->user_id)->get()->first()['name']}}
                                <button type="button" onclick="modal{{$enroll->id}}()" class="btn bg-transparent"><i
                                        class="fas fa-eye"></i></button>
                                <script>
                                    function modal{{$enroll->id}}() {
                                        Swal.fire({
                                            title: 'User Details',
                                            width:600,
                                            html: '<div class="row">' +
                                                '<div class="col-sm-6"> \n' +
                                                '<img width="200px" src="{{asset(\App\User::where('id',$enroll->user_id)->get()->first()['photo_id']  ?'storage/'.\App\User::where('id',$enroll->user_id)->get()->first()->photo->photo_path: 'comimages/profile.png')}}"></div><div class="col-sm-6" style="text-align:start;"><strong>Name: </strong>{{\App\User::where('id',$enroll->user_id)->get()->first()['name']}}\n<br>' +
                                                '<strong>Email: </strong>{{\App\User::where('id',$enroll->user_id)->get()->first()['email']}}\n<br>' +
                                                '<strong>Phone No: </strong>{{\App\User::where('id',$enroll->user_id)->get()->first()['phone']}}\n<br>' +
                                                '<strong>District: </strong>{{\App\User::where('id',$enroll->user_id)->get()->first()['district']}}\n<br>' +
                                              '<strong>State: </strong>{{\App\User::where('id',$enroll->user_id)->get()->first()['state']}}\n<br>'+
                                        
                                                '</div>',
                                            showConfirmButton: true,
                                            background: '#ffffff',
                                            backdrop: `rgba(0,0,253,0.4)`
                                        })
                                    }
                                </script>

                            </td>
                            <td>{{\App\Course::where('id',$enroll->course_id)->get()->first()['title']}}</td>
                               <td>
                                <form action="{{route('admin.user.course.delete',$enroll->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No User found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$user_courses->links()}}
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script type="text/javascript">
        setInterval(function () {
            $("#data").load(location.href + " #data>*", "");
        }, 10000);
    </script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.searchable').select2();
        });
    </script>
@endsection
