@extends('layouts.admin')
@section('title')
    Chat Teachers
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
    @if ($message = Session::get('warning'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif


    <!-- Search -->
{{--    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{route('admin.coupon.index')}}" method="GET">--}}
{{--        @csrf--}}
{{--        <div class="input-group">--}}
{{--            <input type="text" class="form-control border-2 small" name="coupon" placeholder="Search for..."--}}
{{--                   aria-label="Search" aria-describedby="basic-addon2">--}}
{{--            <div class="input-group-append">--}}
{{--                <button class="btn btn-primary" type="submit">--}}
{{--                    <i class="fas fa-search fa-sm"></i>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}



    <form action="{{route('admin.chat-teachers.create')}}" method="POST">
        @csrf
        <div class="input-group">
            <input type="email" name="email" class="form-control w-50 mr-2" placeholder="enter the email of the teacher" autofocus>
            <button class="btn btn-primary" type="submit">
                Add
            </button>
        </div>
    </form>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Chat Teachers</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Teacher Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Change Status</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($teachers as $teacher)
                        <tr>
                            <td>{{\App\User::findOrFail($teacher->user_id)->name}}</td>
                            <td>{{\App\User::findOrFail($teacher->user_id)->email}}</td>
                            <td>{{\App\User::findOrFail($teacher->user_id)->phone}}</td>
                              <td>
                                @if($teacher->status)
                                    Active
                                @else
                                    Not Active
                                @endif
                            </td>
                            <td>
                                @if($teacher->status)
                                    <a href="{{route('admin.chat-teachers.status', $teacher->id)}}" class="btn btn-danger">Deactivate</a>
                                @else
                                    <a href="{{route('admin.chat-teachers.status', $teacher->id)}}" class="btn btn-success">Activate</a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Teacher Added</td>
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
        setInterval(function() {
            $("#data").load(location.href+" #data>*","");
        }, 10000);
    </script>
@endsection
