@extends('layouts.admin')
@section('title')
    Events
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
    <!-- Search -->
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{route('admin.admins.index')}}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="searchUser" placeholder="Search Username..."
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
            <h6 class="m-0 font-weight-bold text-primary">Admins</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>District</th>
                        <th>State</th>
                        <th>Created at</th>
                        <th>Edit</th>
                        <th>Change</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->district}}</td>
                            <td>{{$user->state}}</td>
                            <td>{{$user->created_at}}</td>
                            <td><a class="btn btn-primary small" href="{{route('admin.users.edit',$user->id)}}">Edit
                                </a><i class="fa fa-pencil-square" aria-hidden="true"></i></td>


                            <td><a class="btn btn-primary small" href="{{route('admin.users.password_admin',$user->id)}}">Change Password
                                </a><i class="fa fa-pencil-square" aria-hidden="true"></i></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No Admins found</td>
                        </tr>
                    @endforelse
                    </tbody>

                </table>
                {{ $users->links() }}
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
