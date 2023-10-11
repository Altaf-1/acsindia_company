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


    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Counsellor Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($datas as $data)
                        <tr>
                            <td>{{$data->user_name}}</td>
                            <td>{{$data->user_email}}</td>
                            <td>{{$data->user_phone}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No User found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

