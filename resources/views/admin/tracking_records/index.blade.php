@extends('layouts.admin')
@section('title')
    User Courses
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
        @if($message = Session::get('error'))
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
                icon: 'error',
                title: '{{$message}}'
            })
        </script>
    @endif
    <h4>Tracking records</h4>
    <hr>
    <!-- Search -->
    <form class="d-sm-inline-block form-inline mr-auto my-md-0 mw-100 navbar-search"
          action="{{route('admin.tracking.index')}}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="search" placeholder="Search Tracking ID..."
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
            <h6 class="m-0 font-weight-bold text-primary">Tracking Records</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Tracking Id</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Course</th>
                        <th>Postal Address</th>
                        <th>Date and Time</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($trackings as $tracking)
                        <tr>
                            <td>{{$tracking->tracking_id}}</td>
                            <td>{{$tracking->userData($tracking->user_id)->name}}</td>
                            <td>{{$tracking->userData($tracking->user_id)->email}}</td>
                            <td>{{$tracking->userData($tracking->user_id)->phone}}</td>
                            <td>{{$tracking->course_title}}</td>
                            <td>{{$tracking->userData($tracking->user_id)->postal}}</td>
                            <td>{{$tracking->created_at}}</td>
                            <td>
                                <form action="{{route('admin.tracking.delete',$tracking->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No Trackings found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$trackings->appends(Request::get('search'))->links()}}
            </div>
        </div>
    </div>
@endsection

