@extends('layouts.admin')
@section('title')
    Addtional Subjects
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

    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6"><h6 class="m-0 font-weight-bold btn text-primary">Courses</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="usercourse" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Course</th>
                        <th>Additional subjects</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                @forelse($user->apsc_courses as $enroll)
                                    {{$enroll->title}}
                                @empty
                                    @forelse($user->courses as $enroll)
                                        {{$enroll->title}}
                                    @empty
                                        @foreach($user->study_materials as $enroll)
                                            {{$enroll->title}}
                                        @endforeach
                                    @endforelse
                                @endforelse

                            </td>
                            <td>{{$user->subject}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No User found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
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
@endsection
