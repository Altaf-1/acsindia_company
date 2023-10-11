@extends('layouts.admin')
@section('title')
    Interview Preparations
@endsection
@section('content')
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @elseif ($message = Session::get('create'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <hr>
        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Students</div>
                        <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800">{{ $datas->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x" style="color:#fb78ff;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Interview Preparations</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>District</th>
                            <th>Roll Number</th>
                            <th>Profile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($datas as $data)
                            <tr>
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->user->email }}</td>
                                <td>{{ $data->user->phone }}</td>
                                <td>{{ $data->user->district }}</td>
                                <td>{{ $data->roll_number }}</td>
                                <td><img src="{{asset('storage/'.$data->profile)}}" width="100" alt=""></td>
                                <td>
                                    <form action="{{ route('interview.preparation.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No Data found</td>
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
            $("#data").load(location.href + " #data>*", "");
        }, 10000);
    </script>
@endsection
