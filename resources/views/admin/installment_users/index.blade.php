@extends('layouts.admin')
@section('title')
    Installment Permitted Users
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
    
        @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <!-- Search -->
    <form class="d-sm-inline-block border p-4 form-inline mr-auto ml-md-3 my-2 my-md-0 w-100 navbar-search"
          action="{{route('admin.payment-installment-add.add-user')}}" method="POST">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 w-50" name="email" required placeholder="Email Id"
                   aria-label="Email" aria-describedby="basic-addon2">
            <input type="text" class="form-control border-2 w-50" name="phone" required placeholder="Phone No."
                   aria-label="Phone" aria-describedby="basic-addon2">
                <button class="btn btn-primary" type="submit">
                    Add User
                </button>
        </div>
    </form>


    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($users as $user)
                        <tr>
                            <td>{{\App\User::findOrFail($user->user_id)->name}}</td>
                            <td>{{\App\User::findOrFail($user->user_id)->phone}}</td>
                            <td>{{\App\User::findOrFail($user->user_id)->email}}</td>
                            <td>{{$user->status}}</td>
                            <td>
                                <form action="{{route('admin.payment-installment-add.delete')}}"  method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this user?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No Users found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

