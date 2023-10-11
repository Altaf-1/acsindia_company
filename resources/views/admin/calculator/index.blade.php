@extends('layouts.admin')
@section('title')
    Calculations
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
{{--    <!-- Search -->--}}
{{--    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"--}}
{{--          action="{{route('admin.queries.index')}}" method="GET">--}}
{{--        @csrf--}}
{{--        <div class="input-group">--}}
{{--            <input type="text" class="form-control border-2 small" name="searchUser" placeholder="Search Username..."--}}
{{--                   aria-label="Search" aria-describedby="basic-addon2">--}}
{{--            <div class="input-group-append">--}}
{{--                <button class="btn btn-primary" type="submit">--}}
{{--                    <i class="fas fa-search fa-sm"></i>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th >Email</th>
                        <th>Phone</th>
                        <th>Roll Number</th>
                        <th>Acs Student</th>
                        <th>Paper</th>
                        <th>Correct ans</th>
                        <th>Wrong ans</th>
                        <th>Total</th>
                        <th>Percentage</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($datas as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->roll_number}}</td>
                            <td>{{$data->acs_student}}</td>
                            <td>{{$data->paper}}</td>
                            <td>{{$data->correct_ans}}</td>
                            <td>{{$data->wrong_ans}}</td>
                            <td>{{$data->total}}</td>
                            <td>{{$data->per}}</td>
                            <td>{{\Carbon\Carbon::parse($data->created_at)->format('d-m-Y')}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No Data found</td>
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
