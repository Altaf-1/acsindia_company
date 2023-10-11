@extends('layouts.admin')
@section('title')
    Staff Income
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
    @elseif($message = Session::get('info'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
          action="{{route('admin.staff-income.index')}}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="search" placeholder="Search for name"
                   aria-label="Search" aria-describedby="basic-addon2" value="{{Request::get('search')}}">
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
            <h6 class="m-0 font-weight-bold text-primary">Staff Income</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Staff ID</th>
                        <th>Staff Name</th>
                        <th>Basic Salary</th>
                        <th>Create Salary</th>
                        <th>View Monthly salary</th>
                    </tr>
                    </thead>
                    <tbody id="data">

                    @forelse($datas as $data)
                        <tr>
                            <td>{{$data->staff_id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->basic}}</td>
                            <td><a class="btn button btn-primary"
                                   href="{{route('admin.staff-income.create-salary',$data->staff_id)}}">Create</a></td>
                            <td><a class="btn button btn-success"
                                   href="{{route('admin.staff-income.salary-index',$data->staff_id)}}">Show</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$datas->appends(Request::get('search'))->links()}}
            </div>
        </div>
    </div>
@endsection
