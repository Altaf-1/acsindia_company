
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


    <form class="d-sm-inline-block form-inline mr-auto w-50 navbar-search"
          action="{{route('admin.user-webinar.counsellor-students.show',$counsellorId)}}"
          method="GET">
        @csrf
        <div class="input-group">
            <input type="text"
                   class="form-control border-2 small"
                   name="email_phone"
                   placeholder="Enter User email or Phone."
                   aria-label="Search"
                   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Search -->

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Webinar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Webinar</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Added On</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($students as $data)
                        <tr>
                            <td>{{$data->webinar}}</td>
                            <td>{{$data->user_name}}</td>
                            <td>{{$data->user_email}}</td>
                            <td>{{$data->user_phone}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>
                                <form action="{{route('admin.user-webinar.destroy',$data->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">
                                        <i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No User found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $students->appends(Request::all())->links() }}
            </div>
        </div>
    </div>
@endsection

