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
                        <th>Month</th>
                        <th>Earning</th>
                        <th>Deduction</th>
                        <th>Net Salary</th>
                        <th>Invoice</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">

                    @forelse($datas as $data)
                        <tr>
                            <td>{{$data->staff_id}}</td>
                            <td>{{$data->month}}</td>
                            <td>{{$data->earning}}</td>
                            <td>{{$data->deduction}}</td>
                            <td>{{$data->net_salary}}</td>
                                     <td><a target="_blank" class="btn button btn-primary"
                                   href="{{route('admin.staff-income.salary-pdf',$data->id)}}">Show</a></td>
                            <td><a class="btn button btn-success"
                                   href="{{route('admin.staff-income.salary-edit',$data->id)}}">Edit</a></td>
                            <td>
                                <form action="{{route('admin.staff-income.salary-delete', $data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
